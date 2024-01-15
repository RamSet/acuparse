<?php
/**
 * Acuparse - AcuRite Access/smartHUB and IP Camera Data Processing, Display, and Upload.
 * @copyright Copyright (C) 2015-2024 Maxwell Power
 * @author Maxwell Power <max@acuparse.com>
 * @link http://www.acuparse.com
 * @license AGPL-3.0+
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this code. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * File: src/fcn/weather/inc/reverseWindDirection.php
 * Reverse Wind Direction for Southern Hemisphere
 */

function reverseWindDirection($windDEG): int
{
    if ($windDEG === 0) {
        $result = 180;
    } elseif ($windDEG === 180) {
        $result = 360;
    } elseif ($windDEG === 360) {
        $result = 0;
    } elseif ($windDEG < 180) {
        $result = $windDEG + 180;
    } elseif ($windDEG < 360) {
        $result = $windDEG - 180;
    } else {
        $result = 0;
    }

    return $result;
}
