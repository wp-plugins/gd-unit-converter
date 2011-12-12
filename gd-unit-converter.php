<?php

/*
Plugin Name: GD Unit Converter
Plugin URI: http://www.dev4press.com/plugins/gd-unit-converter/
Description: Simple and easy unit conversion directly from the admin dashboard. Supports: currency, length, speed, weight, memory, temperature...
Version: 1.1.1
Author: Milan Petrovic
Author URI: http://www.dev4press.com/

== Copyright ==
Copyright 2008 - 2011 Milan Petrovic (email: milan@gdragon.info)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define("GDUNITCONVERTER_VERSION", "1.1.0");
define("GDUNITCONVERTER_WP_ADMIN", defined("WP_ADMIN") && WP_ADMIN);

if (GDUNITCONVERTER_WP_ADMIN) {
    if (!function_exists("json_decode")) {
        require_once(dirname(__FILE__)."/code/json.php");
    }

    require_once(dirname(__FILE__)."/gdr2/gdr2.core.php");
    require_once(dirname(__FILE__)."/gdr2/gdr2.units.php");

    require_once(dirname(__FILE__)."/code/admin.php");
}

?>