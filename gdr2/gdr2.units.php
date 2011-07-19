<?php

/*
Name:    gdr2_Units
Version: 2.4.0
Author:  Milan Petrovic
Email:   milan@gdragon.info
Website: http://www.dev4press.com/libs/gdr2/
Info:    http://en.wikipedia.org/wiki/Unit_conversion

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

if (!class_exists("gdr2_Units")) {
    class gdr2_Units {
        public $data = array();

        function __construct() {
            add_action("init", array(&$this, "init"), 1);
        }

        public function init() {
            $this->data = array(
                "length" => array(
                    "name" => __("Lenght or Distance"),
                    "base" => "mm",
                    "list" => array(
                        "mm" => __("Millimeter"),
                        "cm" => __("Centimeter"),
                        "dm" => __("Decimeter"),
                        "m" => __("Meter"),
                        "km" => __("Kilometer"),
                        "in" => __("Inch"),
                        "ft" => __("Feet"),
                        "yd" => __("Yard")
                    ),
                    "convert" => array(
                        "mm" => 1,
                        "cm" => 10,
                        "dm" => 100,
                        "m" => 1000,
                        "km" => 1000000,
                        "in" => 25.4,
                        "ft" => 304.8,
                        "yd" => 914.4
                    )),
                "brightness" => array(
                    "name" => __("Brightness"),
                    "base" => "sb",
                    "list" => array(
                        "sb" => __("Stilb"),
                        "cd/cm2" => __("Candela / square centimeter"),
                        "cd/m2" => __("Candela / square meter"),
                        "cd/in2" => __("Candela / square inch"),
                        "cd/ft2" => __("Candela / square foot"),
                        "La" => __("Lambert"),
                        "fL" => __("FootLambert"),
                        "mL" => __("MeterLambert"),
                        "mLa" => __("MilliLambert")
                    ),
                    "convert" => array(
                        "sb" => 1,
                        "cd/cm2" => 1,
                        "cd/m2" => 0.0001,
                        "cd/in2" => 0.15500031000062,
                        "cd/ft2" => 0.001076391041671,
                        "La" => 0.318309886183791,
                        "fL" => 0.000342625909964,
                        "mL" => 0.0001,
                        "mLa" => 0.000318309886184
                    )),
                "power" => array(
                    "name" => __("Power"),
                    "base" => "W",
                    "list" => array(
                        "W" => __("Watt"),
                        "kW" => __("Kilowatt"),
                        "MB" => __("Megawatt"),
                        "GB" => __("Gigawatt"),
                        "hp" => __("Horsepower"),
                        "hp-m" => __("Horsepower metric"),
                        "mhp" => __("Millihorsepower"),
                        "cal/hr" => __("Calorie / hour"),
                        "cal/min" => __("Calorie / minute"),
                        "cal/sec" => __("Calorie / second"),
                        "joule/hr" => __("Joule / hour"),
                        "joule/min" => __("Joule / minute"),
                        "joule/sec" => __("Joule / second")
                    ),
                    "convert" => array(
                        "W" => 1,
                        "kB" => 1000,
                        "MB" => 1000000,
                        "GB" => 1000000000,
                        "hp" => 745.69987158227,
                        "hp-m" => 735.49875,
                        "mhp" => 0.74569987158227,
                        "cal/hr" => 0.001163,
                        "cal/min" => 0.06978,
                        "cal/sec" => 4.1868,
                        "joule/hr" => 0.000277777777778,
                        "joule/min" => 0.016666666666667,
                        "joule/sec" => 1,
                    )),
                "memory" => array(
                    "name" => __("Memory"),
                    "base" => "B",
                    "list" => array(
                        "bit" => __("Bit"),
                        "B" => __("Byte"),
                        "KB" => __("Kilobyte"),
                        "MB" => __("Megabyte"),
                        "GB" => __("Gigabyte"),
                        "TB" => __("Terabyte"),
                        "PB" => __("Petabyte"),
                        "1CD74" => __("1 CD 74min"),
                        "1CD80" => __("1 CD 80min"),
                        "1DVD" => __("1 DVD Dual Layer"),
                        "1DVDDL" => __("1 DVD")
                    ),
                    "convert" => array(
                        "bit" => 0.125,
                        "B" => 1,
                        "KB" => 1024,
                        "MB" => 1048576,
                        "GB" => 1073741824,
                        "TB" => 1099511627800,
                        "PB" => 1125899906800000,
                        "1CD74" => 5448466432,
                        "1CD80" => 5890233976,
                        "1DVD" => 394264576000,
                        "1DVDDL" => 713031680000
                    )),
                "temperature" => array(
                    "name" => __("Temperature"),
                    "base" => "C",
                    "list" => array(
                        "C" => __("Celsius"),
                        "F" => __("Fahrenheit"),
                        "K" => __("Kelvin"),
                        "R" => __("Reaumur")
                    ),
                    "convert" => array(
                        "C" => array("ratio" => 1, "offset" => 0),
                        "F" => array("ratio" => 1.8, "offset" => 32),
                        "K" => array("ratio" => 1, "offset" => 273),
                        "R" => array("ratio" => 0.8, "offset" => 0)
                    )),
                "weight" => array(
                    "name" => __("Weight / Mass"),
                    "base" => "mg",
                    "list" => array(
                        "mg" => __("Milligram"),
                        "g" => __("Gram"),
                        "kg" => __("Kilogram"),
                        "t" => __("Tonne"),
                        "oz" => __("Ounce"),
                        "lb" => __("Pound"),
                        "carat" => __("Carat")
                    ),
                    "convert" => array(
                        "mg" => 1,
                        "g" => 1000,
                        "kg" => 1000000,
                        "t" => 1000000000,
                        "oz" => 28349.5231,
                        "lb" => 453592.37,
                        "carat" => 205.196548333
                    )),
                "electrical_charge" => array(
                    "name" => __("Electrical Charge"),
                    "base" => "C",
                    "list" => array(
                        "C" => __("Coulomb"),
                        "nC" => __("Nanocoulomb"),
                        "uC" => __("Microcoulomb"),
                        "mC" => __("Millicoulomb"),
                        "kC" => __("Kilocoulomb"),
                        "MC" => __("Megacoulomb"),
                        "GC" => __("Gigacoulomb"),
                        "abC" => __("Abcoulomb"),
                        "emu" => __("Electromagnetic unit of charge"),
                        "ecu" => __("Electrostatic unit of chargee"),
                        "F" => __("Faraday"),
                        "Fr" => __("Franklin"),
                        "Ah" => __("Ampere Hour"),
                        "Am" => __("Ampere Minute"),
                        "As" => __("Ampere Second"),
                        "mAh" => __("Milliampere Hour"),
                        "mAm" => __("Milliampere Minute"),
                        "mAs" => __("Milliampere Second")
                    ),
                    "convert" => array(
                        "C" => 1,
                        "nC" => 0.000000001,
                        "uC" => 0.000001,
                        "mC" => 0.001,
                        "kC" => 1000,
                        "MC" => 1000000,
                        "GC" => 1000000000,
                        "abC" => 10,
                        "emu" => 10,
                        "ecu" => 0.000000000334,
                        "F" => 96485.338300000003,
                        "Fr" => 0.000000000334,
                        "Ah" => 3600,
                        "Am" => 60,
                        "As" => 1,
                        "mAh" => 3.6,
                        "mAm" => 0.06,
                        "mAs" => 0.001
                    )),
                "speed" => array(
                    "name" => __("Speed"),
                    "base" => "kph",
                    "list" => array(
                        "mps" => __("Meters per second"),
                        "kph" => __("Kilometers per hour"),
                        "mph" => __("Miles per hour"),
                        "kn" => __("Knots")
                    ),
                    "convert" => array(
                        "mps" => 3.6,
                        "kph" => 1,
                        "mph" => 1.609344,
                        "kn" => 1.852
                    )),
                "angle" => array(
                    "name" => __("Angle"),
                    "base" => "radian",
                    "list" => array(
                        "radian" => __("Radian"),
                        "grad" => __("Grad"),
                        "degree" => __("Degree"),
                        "minute" => __("Minute"),
                        "second" => __("Second"),
                        "revolution" => __("Revolution"),
                    ),
                    "convert" => array(
                        "radian" => 1,
                        "grad" => 0.015707963268,
                        "degree" => 0.01745329252,
                        "minute" => 0.00029088820867,
                        "second" => 0.0000048481368111,
                        "revolution" => 6.283185307,
                    )),
                "time" => array(
                    "name" => __("Time"),
                    "base" => "ns",
                    "list" => array(
                        "ns" => __("Nanosecond"),
                        "us" => __("Microsecond"),
                        "ms" => __("Millisecond"),
                        "s" => __("Second"),
                        "min" => __("Minute"),
                        "hour" => __("Hour"),
                        "day" => __("Day"),
                        "week" => __("Week"),
                        "month" => __("Month"),
                        "year" => __("Year"),
                        "century" => __("Century"),
                        "millennium" => __("Millennium")
                    ),
                    "convert" => array(
                        "ns" => 1,
                        "us" => 1000,
                        "ms" => 1000000,
                        "s" => 1000000000,
                        "min" => 60000000000,
                        "hour" => 3600000000000,
                        "day" => 86400000000000,
                        "week" => 604800000000000,
                        "month" => 2592000000000000,
                        "year" => 31556926000000000,
                        "century" => 3155692600000000000,
                        "millennium" => 31556926000000000000
                    )),
                "currency" => array(
                    "name" => __("Currency"),
                    "list" => array(
                        "AED" => "United Arab Emirates Dirham (AED)",
                        "ANG" => "Netherlands Antillean Guilder (ANG)",
                        "ARS" => "Argentine Peso (ARS)",
                        "AUD" => "Australian Dollar (AUD)",
                        "BDT" => "Bangladeshi Taka (BDT)",
                        "BGN" => "Bulgarian Lev (BGN)",
                        "BHD" => "Bahraini Dinar (BHD)",
                        "BND" => "Brunei Dollar (BND)",
                        "BOB" => "Bolivian Boliviano (BOB)",
                        "BRL" => "Brazilian Real (BRL)",
                        "BWP" => "Botswanan Pula (BWP)",
                        "CAD" => "Canadian Dollar (CAD)",
                        "CHF" => "Swiss Franc (CHF)",
                        "CLP" => "Chilean Peso (CLP)",
                        "CNY" => "Chinese Yuan (CNY)",
                        "COP" => "Colombian Peso (COP)",
                        "CRC" => "Costa Rican Colon (CRC)",
                        "CZK" => "Czech Republic Koruna (CZK)",
                        "DKK" => "Danish Krone (DKK)",
                        "DOP" => "Dominican Peso (DOP)",
                        "DZD" => "Algerian Dinar (DZD)",
                        "EEK" => "Estonian Kroon (EEK)",
                        "EGP" => "Egyptian Pound (EGP)",
                        "EUR" => "Euro (EUR)",
                        "FJD" => "Fijian Dollar (FJD)",
                        "GBP" => "British Pound Sterling (GBP)",
                        "HKD" => "Hong Kong Dollar (HKD)",
                        "HNL" => "Honduran Lempira (HNL)",
                        "HRK" => "Croatian Kuna (HRK)",
                        "HUF" => "Hungarian Forint (HUF)",
                        "IDR" => "Indonesian Rupiah (IDR)",
                        "ILS" => "Israeli New Sheqel (ILS)",
                        "INR" => "Indian Rupee (INR)",
                        "JMD" => "Jamaican Dollar (JMD)",
                        "JOD" => "Jordanian Dinar (JOD)",
                        "JPY" => "Japanese Yen (JPY)",
                        "KES" => "Kenyan Shilling (KES)",
                        "KRW" => "South Korean Won (KRW)",
                        "KWD" => "Kuwaiti Dinar (KWD)",
                        "KYD" => "Cayman Islands Dollar (KYD)",
                        "KZT" => "Kazakhstani Tenge (KZT)",
                        "LBP" => "Lebanese Pound (LBP)",
                        "LKR" => "Sri Lankan Rupee (LKR)",
                        "LTL" => "Lithuanian Litas (LTL)",
                        "LVL" => "Latvian Lats (LVL)",
                        "MAD" => "Moroccan Dirham (MAD)",
                        "MDL" => "Moldovan Leu (MDL)",
                        "MKD" => "Macedonian Denar (MKD)",
                        "MUR" => "Mauritian Rupee (MUR)",
                        "MVR" => "Maldivian Rufiyaa (MVR)",
                        "MXN" => "Mexican Peso (MXN)",
                        "MYR" => "Malaysian Ringgit (MYR)",
                        "NAD" => "Namibian Dollar (NAD)",
                        "NGN" => "Nigerian Naira (NGN)",
                        "NIO" => "Nicaraguan Cordoba (NIO)",
                        "NOK" => "Norwegian Krone (NOK)",
                        "NPR" => "Nepalese Rupee (NPR)",
                        "NZD" => "New Zealand Dollar (NZD)",
                        "OMR" => "Omani Rial (OMR)",
                        "PEN" => "Peruvian Nuevo Sol (PEN)",
                        "PGK" => "Papua New Guinean Kina (PGK)",
                        "PHP" => "Philippine Peso (PHP)",
                        "PKR" => "Pakistani Rupee (PKR)",
                        "PLN" => "Polish Zloty (PLN)",
                        "PYG" => "Paraguayan Guarani (PYG)",
                        "QAR" => "Qatari Rial (QAR)",
                        "RON" => "Romanian Leu (RON)",
                        "RSD" => "Serbian Dinar (RSD)",
                        "RUB" => "Russian Ruble (RUB)",
                        "SAR" => "Saudi Riyal (SAR)",
                        "SCR" => "Seychellois Rupee (SCR)",
                        "SEK" => "Swedish Krona (SEK)",
                        "SGD" => "Singapore Dollar (SGD)",
                        "SKK" => "Slovak Koruna (SKK)",
                        "SLL" => "Sierra Leonean Leone (SLL)",
                        "SVC" => "Salvadoran Colon (SVC)",
                        "THB" => "Thai Baht (THB)",
                        "TND" => "Tunisian Dinar (TND)",
                        "TRY" => "Turkish Lira (TRY)",
                        "TTD" => "Trinidad and Tobago Dollar (TTD)",
                        "TWD" => "New Taiwan Dollar (TWD)",
                        "TZS" => "Tanzanian Shilling (TZS)",
                        "UAH" => "Ukrainian Hryvnia (UAH)",
                        "UGX" => "Ugandan Shilling (UGX)",
                        "USD" => "US Dollar (USD)",
                        "UYU" => "Uruguayan Peso (UYU)",
                        "UZS" => "Uzbekistan Som (UZS)",
                        "VEF" => "Venezuelan Bolivar (VEF)",
                        "VND" => "Vietnamese Dong (VND)",
                        "XOF" => "CFA Franc BCEAO (XOF)",
                        "YER" => "Yemeni Rial (YER)",
                        "ZAR" => "South African Rand (ZAR)",
                        "ZMK" => "Zambian Kwacha (ZMK)"
                    ))
            );
        }

        public function get_values($name) {
            $data = $this->data[$name]["list"];
            $data = apply_filters("gdr2_unit_values_for_".$name, $data);
            return $data;
        }

        public function get_units() {
            $data = array();
            foreach ($this->data as $unit => $obj) {
                $data[$unit] = $obj["name"];
            }
            return $data;
        }

        public function convert($name, $value, $from, $to) {
            if (!isset($this->data[$name])) return null;

            if ($name == "currency") {
                return $this->conv_currency($value, $from, $to);
            } else {
                $base = $this->data[$name]["base"];
                $ratio_from = $this->data[$name]["convert"][$from];
                $ratio_to = $this->data[$name]["convert"][$to];

                switch ($name) {
                    case "temperature":
                        return $this->conv_temperature($value, $ratio_from, $ratio_to);
                        break;
                    default:
                        return $this->conv_normal($value, $ratio_from, $ratio_to);
                        break;
                }
            }
        }

        private function conv_normal($value, $ratio_from, $ratio_to) {
            $value_base = $value * $ratio_from;
            return $value_base / $ratio_to;
        }

        private function conv_temperature($value, $ratio_from, $ratio_to) {
            $value_base = ($value - $ratio_from["offset"]) / $ratio_from["ratio"];
            echo $value_base * $ratio_to["ratio"] + $ratio_to["offset"];
        }

        private function conv_currency($value, $from, $to) {
            if (!is_numeric($value)) return null;
            $value = trim($value);

            $from = strtoupper($from);
            $to = strtoupper($to);
            $crr = array($from, $to);
            sort($crr);
            $reverse = $crr[0] != $from;

            $key = "currency_rate_".$crr[0]."-".$crr[1];
            $rate = gdr2c_get_network($key);
            if ($rate === false || is_null($rate) || empty($rate)) {
                $rate = $this->currency_from_google($crr[0], $crr[1]);
                if (is_null($rate) || empty($rate)) return null;
                gdr2c_set_network($key, $rate, 86400);
            }

            $rate = $reverse ? 1 / $rate : $rate;
            return $rate * $value;
        }

        private function currency_from_google($from, $to) {
            $url = "http://www.google.com/ig/calculator?hl=en&q=1".$from."%3D%3F".$to;
            
            $curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_HEADER, 0);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl, CURLOPT_FAILONERROR, 1);
	    $json = curl_exec($curl);

            if (empty($json)) {
                return null;
            } else {
                $rhs = strpos($json, "rhs");
                if ($rhs !== false) {
                    $rhs = substr(trim(substr($json, $rhs + 4)), 1);
                    $rhs = explode(" ", $rhs);
                    return $rhs[0];
                }
            }
        }
    }

    $gdr2_units = new gdr2_Units();

    function gdr2_unit_convert($name, $value, $from, $to) {
        global $gdr2_units;
        return $gdr2_units->convert($name, $value, $from, $to);
    }
}

?>