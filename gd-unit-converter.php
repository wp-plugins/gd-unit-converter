<?php
/*
Plugin Name: GD Unit Converter
Plugin URI: http://www.dev4press.com/plugins/gd-unit-converter/
Description: Simple and easy unit conversion directly from the admin dashboard. Supports: currency, length, speed, weight, memory, temperature...
Version: 1.0.0
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

require_once(dirname(__FILE__)."/gdr2/gdr2.core.php");
require_once(dirname(__FILE__)."/gdr2/gdr2.units.php");

if (!function_exists("json_decode")) {
    require_once(dirname(__FILE__)."/code/json.php");
}

class gdUnitConverter {
    private $plugin_url;
    private $plugin_path;
    private $script;

    function __construct() {
        $this->script = $_SERVER["PHP_SELF"];
        $this->script = end(explode("/", $this->script));

        add_action("admin_init", array(&$this, "admin_init"));
        add_action("wp_dashboard_setup", array(&$this, "dashboard_setup"));
        add_action("wp_ajax_gduc_currency_convert", array(&$this, "currency_convert"));

        $this->plugin_path_url();
    }

    private function plugin_path_url() {
        $this->plugin_url = plugins_url('/gd-unit-converter/');
        $this->plugin_path = dirname(__FILE__)."/";

        define('GDUNITCONVERTER_URL', $this->plugin_url);
        define('GDUNITCONVERTER_PATH', $this->plugin_path);
    }

    public function currency_convert() {
        check_ajax_referer("gd-unit-converter");

        $from = $_POST["from"];
        $to = $_POST["to"];
        $val = $_POST["val"];

        $res = array("result" => gdr2_unit_convert("currency", $val, $from, $to));
        die(json_encode($res));
    }

    public function admin_init() {
        if ($this->script == "index.php") {
            wp_enqueue_style("gd-unit-converter", GDUNITCONVERTER_URL."css/unit-converter.css");
            wp_enqueue_script("gd-unit-converter", GDUNITCONVERTER_URL."js/unit-converter.js", array("jquery"));
        }
    }
    
    public function dashboard_setup() {
        wp_add_dashboard_widget("dashboard_gd_unit_converter", "GD Unit Converter", array(&$this, "dashboard_widget"));
    }

    public function dashboard_widget() {
        include(GDUNITCONVERTER_PATH."code/dashboard.php");
    }
}

$gduc_core = new gdUnitConverter();

?>