<?php

/*
Name:    gdr2_Units
Version: 2.5.6
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
    /**
     * Class for the conversion of values with different units.
     */
    class gdr2_Units {
        public $data = array();

        /**
         * Runs the initialization of the units convertion arrays.
         */
        public function __construct() {
            $this->init();
        }

        /**
         * Initialization of conversion arrays.
         */
        public function init() {
            $this->data = array(
                "length" => array(
                    "name" => __("Lenght or Distance", "gdr2"),
                    "base" => "mm",
                    "list" => array(
                        "mm" => __("Millimeter", "gdr2"),
                        "cm" => __("Centimeter", "gdr2"),
                        "dm" => __("Decimeter", "gdr2"),
                        "m" => __("Meter", "gdr2"),
                        "km" => __("Kilometer", "gdr2"),
                        "in" => __("Inch", "gdr2"),
                        "ft" => __("Feet", "gdr2"),
                        "yd" => __("Yard", "gdr2")
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
                    "name" => __("Brightness", "gdr2"),
                    "base" => "sb",
                    "list" => array(
                        "sb" => __("Stilb", "gdr2"),
                        "cd/cm2" => __("Candela / square centimeter", "gdr2"),
                        "cd/m2" => __("Candela / square meter", "gdr2"),
                        "cd/in2" => __("Candela / square inch", "gdr2"),
                        "cd/ft2" => __("Candela / square foot", "gdr2"),
                        "La" => __("Lambert", "gdr2"),
                        "fL" => __("FootLambert", "gdr2"),
                        "mL" => __("MeterLambert", "gdr2"),
                        "mLa" => __("MilliLambert", "gdr2")
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
                "frequency" => array(
                    "name" => __("Frequency", "gdr2"),
                    "base" => "Hz",
                    "list" => array(
                        "Hz" => __("Hertz", "gdr2"),
                        "kHz" => __("Kilohertz", "gdr2"),
                        "MHz" => __("Megahertz", "gdr2"),
                        "GHz" => __("Gigahertz", "gdr2"),
                        "THz" => __("Terahertz", "gdr2"),
                        "mHz" => __("Millihertz", "gdr2"),
                        "rad/hr" => __("Radian / Hour", "gdr2"),
                        "rad/min" => __("Radian / Minute", "gdr2"),
                        "rad/s" => __("Radian / Second", "gdr2"),
                        "deg/hr" => __("Degree / Hour", "gdr2"),
                        "deg/min" => __("Degree / Minute", "gdr2"),
                        "deg/s" => __("Degree / Second", "gdr2"),
                        "cps" => __("Cycle / Second", "gdr2")
                    ),
                    "convert" => array(
                        "Hz" => 1,
                        "kHz" => 1000,
                        "MHz" => 1000000,
                        "GHz" => 1000000000,
                        "THz" => 1000000000000,
                        "mHz" => 0.001,
                        "rad/hr" => 0.000044209706414415,
                        "rad/min" => 0.002652582384865,
                        "rad/s" => 0.159154943091895,
                        "deg/hr" => 0.000000771604938272,
                        "deg/min" => 0.000046296296296296,
                        "deg/s" => 0.002777777777778,
                        "cps" => 1,
                    )),
                "power" => array(
                    "name" => __("Power", "gdr2"),
                    "base" => "W",
                    "list" => array(
                        "W" => __("Watt", "gdr2"),
                        "kW" => __("Kilowatt", "gdr2"),
                        "MB" => __("Megawatt", "gdr2"),
                        "GB" => __("Gigawatt", "gdr2"),
                        "hp" => __("Horsepower", "gdr2"),
                        "hp-m" => __("Horsepower metric", "gdr2"),
                        "mhp" => __("Millihorsepower", "gdr2"),
                        "cal/hr" => __("Calorie / hour", "gdr2"),
                        "cal/min" => __("Calorie / minute", "gdr2"),
                        "cal/sec" => __("Calorie / second", "gdr2"),
                        "joule/hr" => __("Joule / hour", "gdr2"),
                        "joule/min" => __("Joule / minute", "gdr2"),
                        "joule/sec" => __("Joule / second", "gdr2")
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
                    "name" => __("Memory", "gdr2"),
                    "base" => "B",
                    "list" => array(
                        "bit" => __("Bit", "gdr2"),
                        "B" => __("Byte", "gdr2"),
                        "KB" => __("Kilobyte", "gdr2"),
                        "MB" => __("Megabyte", "gdr2"),
                        "GB" => __("Gigabyte", "gdr2"),
                        "TB" => __("Terabyte", "gdr2"),
                        "PB" => __("Petabyte", "gdr2"),
                        "CD74" => __("1 CD 74min", "gdr2"),
                        "CD80" => __("1 CD 80min", "gdr2"),
                        "DVD" => __("1 DVD", "gdr2"),
                        "DVDDL" => __("1 DVD Dual Layer", "gdr2"),
                        "BD" => __("1 BD", "gdr2"),
                        "BDDL" => __("1 BD Dual Layer", "gdr2")
                    ),
                    "convert" => array(
                        "bit" => 0.125,
                        "B" => 1,
                        "KB" => 1024,
                        "MB" => 1048576,
                        "GB" => 1073741824,
                        "TB" => 1099511627800,
                        "PB" => 1125899906800000,
                        "CD74" => 681058304,
                        "CD80" => 736279247,
                        "DVD" => 5046586572.8,
                        "DVDDL" => 9126805504,
                        "BD" => 26843545600,
                        "BDDL" => 53687091200
                    )),
                "temperature" => array(
                    "name" => __("Temperature", "gdr2"),
                    "base" => "C",
                    "list" => array(
                        "C" => __("Celsius", "gdr2"),
                        "F" => __("Fahrenheit", "gdr2"),
                        "K" => __("Kelvin", "gdr2"),
                        "R" => __("Reaumur", "gdr2")
                    ),
                    "convert" => array(
                        "C" => array("ratio" => 1, "offset" => 0),
                        "F" => array("ratio" => 1.8, "offset" => 32),
                        "K" => array("ratio" => 1, "offset" => 273),
                        "R" => array("ratio" => 0.8, "offset" => 0)
                    )),
                "weight" => array(
                    "name" => __("Weight / Mass", "gdr2"),
                    "base" => "mg",
                    "list" => array(
                        "mg" => __("Milligram", "gdr2"),
                        "g" => __("Gram", "gdr2"),
                        "kg" => __("Kilogram", "gdr2"),
                        "t" => __("Tonne", "gdr2"),
                        "oz" => __("Ounce", "gdr2"),
                        "lb" => __("Pound", "gdr2"),
                        "carat" => __("Carat", "gdr2")
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
                "fuel_consumption" => array(
                    "name" => __("Fuel Consumption", "gdr2"),
                    "base" => "L/km",
                    "list" => array(
                        "L/km" => __("Liter/100 Kilometer", "gdr2"),
                        "L/mile" => __("Liter/100 Mile", "gdr2"),
                        "km/L" => __("Kilometer/Liter", "gdr2"),
                        "mile/L" => __("Mile/Liter", "gdr2"),
                        "km/gallon/uk" => __("Kilometer/Gallon - UK", "gdr2"),
                        "km/gallon/us" => __("Kilometer/Gallon - US", "gdr2"),
                        "mile/gallon/uk" => __("Mile/Gallon - UK", "gdr2"),
                        "mile/gallon/us" => __("Mile/Gallon - US", "gdr2"),
                        "gallon/km/uk" => __("Gallon/100 Kilometer - UK", "gdr2"),
                        "gallon/km/us" => __("Gallon/100 Kilometer - US", "gdr2"),
                        "gallon/mile/uk" => __("Gallon/100 Mile - UK", "gdr2"),
                        "gallon/mile/us" => __("Gallon/100 Mile - US", "gdr2")
                    ),
                    "convert" => array(
                        "L/km" => 1,
                        "L/mile" => 0.621371192237334,
                        "km/L" => 100,
                        "mile/L" => 62.1371192237334,
                        "km/gallon/uk" => 454.609,
                        "km/gallon/us" => 378.5411784,
                        "mile/gallon/uk" => 282.480936331822,
                        "mile/gallon/us" => 235.214583333333,
                        "gallon/km/uk" => 4.54609,
                        "gallon/km/us" => 3.785411784,
                        "gallon/mile/uk" => 2.82480936331822,
                        "gallon/mile/us" => 2.35214583333333
                    )),
                "area" => array(
                    "name" => __("Area", "gdr2"),
                    "base" => "m2",
                    "list" => array(
                        "m2" => __("Square Meter", "gdr2"),
                        "km2" => __("Square Kilometer", "gdr2"),
                        "cm2" => __("Square Centimeter", "gdr2"),
                        "mm2" => __("Square Milliimeter", "gdr2"),
                        "in2" => __("Square Inch", "gdr2"),
                        "mi2" => __("Square Mile", "gdr2"),
                        "ft2" => __("Square Foot", "gdr2"),
                        "yd2" => __("Square Yard", "gdr2"),
                        "a" => __("Are", "gdr2"),
                        "ha" => __("Hectare", "gdr2"),
                        "acre" => __("Acre", "gdr2")
                    ),
                    "convert" => array(
                        "m2" => 1,
                        "km2" => 1000000,
                        "cm2" => 0.0001,
                        "mm2" => 0.0000001,
                        "in2" => 0.00064516,
                        "mi2" => 2589988.110336,
                        "ft2" => 0.09290304,
                        "yd2" => 0.83612736,
                        "a" => 100,
                        "ha" => 10000,
                        "acre" => 4046.8564224
                    )),
                "energy" => array(
                    "name" => __("Energy", "gdr2"),
                    "base" => "Wh",
                    "list" => array(
                        "Wh" => __("Watt Hour", "gdr2"),
                        "Ws" => __("Watt Second", "gdr2"),
                        "mWh" => __("Milliwatt Hour", "gdr2"),
                        "kWh" => __("Kilowatt Hour", "gdr2"),
                        "MWh" => __("Kilowatt Hour", "gdr2"),
                        "GWh" => __("Gigawatt Hour", "gdr2"),
                        "cal" => __("Calorie", "gdr2"),
                        "kcal" => __("Kilocalorie", "gdr2"),
                        "J" => __("Joule", "gdr2"),
                        "kJ" => __("Kilojoule", "gdr2"),
                        "MJ" => __("Megajoule", "gdr2"),
                        "GJ" => __("Gigajoule", "gdr2"),
                        "uJ" => __("Microjoule", "gdr2"),
                        "mJ" => __("Millijoule", "gdr2")
                    ),
                    "convert" => array(
                        "Wh" => 1,
                        "Ws" => 0.000277777777778,
                        "mWh" => 0.001,
                        "kWh" => 1000,
                        "MWh" => 1000000,
                        "GWh" => 1000000000,
                        "cal" => 0.001163,
                        "kcal" => 1.163,
                        "J" => 0.000277777777778,
                        "kJ" => 0.277777777777778,
                        "MJ" => 277.777777777778,
                        "GJ" => 277777.777777778,
                        "uJ" => 0.000000000277777777778,
                        "mJ" => 0.000000277777777778
                    )),
                "electric_current" => array(
                    "name" => __("Electric Current", "gdr2"),
                    "base" => "A",
                    "list" => array(
                        "A" => __("Ampere", "gdr2"),
                        "mA" => __("Milliampere", "gdr2"),
                        "abamp" => __("Abamper", "gdr2"),
                        "MA" => __("Megampere", "gdr2"),
                        "esu/s" => __("Statampere", "gdr2")
                    ),
                    "convert" => array(
                        "A" => 1,
                        "mA" => 0.001,
                        "abamp" => 10,
                        "MA" => 0.000333564095198,
                        "esu/s" => 3.33564095198152e-010
                    )),
                "electrical_charge" => array(
                    "name" => __("Electrical Charge", "gdr2"),
                    "base" => "C",
                    "list" => array(
                        "C" => __("Coulomb", "gdr2"),
                        "nC" => __("Nanocoulomb", "gdr2"),
                        "uC" => __("Microcoulomb", "gdr2"),
                        "mC" => __("Millicoulomb", "gdr2"),
                        "kC" => __("Kilocoulomb", "gdr2"),
                        "MC" => __("Megacoulomb", "gdr2"),
                        "GC" => __("Gigacoulomb", "gdr2"),
                        "abC" => __("Abcoulomb", "gdr2"),
                        "emu" => __("Electromagnetic unit of charge", "gdr2"),
                        "ecu" => __("Electrostatic unit of chargee", "gdr2"),
                        "F" => __("Faraday", "gdr2"),
                        "Fr" => __("Franklin", "gdr2"),
                        "Ah" => __("Ampere Hour", "gdr2"),
                        "Am" => __("Ampere Minute", "gdr2"),
                        "As" => __("Ampere Second", "gdr2"),
                        "mAh" => __("Milliampere Hour", "gdr2"),
                        "mAm" => __("Milliampere Minute", "gdr2"),
                        "mAs" => __("Milliampere Second", "gdr2")
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
                    "name" => __("Speed", "gdr2"),
                    "base" => "kph",
                    "list" => array(
                        "mps" => __("Meters per second", "gdr2"),
                        "kph" => __("Kilometers per hour", "gdr2"),
                        "mph" => __("Miles per hour", "gdr2"),
                        "kn" => __("Knots", "gdr2")
                    ),
                    "convert" => array(
                        "mps" => 3.6,
                        "kph" => 1,
                        "mph" => 1.609344,
                        "kn" => 1.852
                    )),
                "angle" => array(
                    "name" => __("Angle", "gdr2"),
                    "base" => "radian",
                    "list" => array(
                        "radian" => __("Radian", "gdr2"),
                        "grad" => __("Grad", "gdr2"),
                        "degree" => __("Degree", "gdr2"),
                        "minute" => __("Minute", "gdr2"),
                        "second" => __("Second", "gdr2"),
                        "revolution" => __("Revolution", "gdr2"),
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
                    "name" => __("Time", "gdr2"),
                    "base" => "ns",
                    "list" => array(
                        "ns" => __("Nanosecond", "gdr2"),
                        "us" => __("Microsecond", "gdr2"),
                        "ms" => __("Millisecond", "gdr2"),
                        "s" => __("Second", "gdr2"),
                        "min" => __("Minute", "gdr2"),
                        "hour" => __("Hour", "gdr2"),
                        "day" => __("Day", "gdr2"),
                        "week" => __("Week", "gdr2"),
                        "month" => __("Month", "gdr2"),
                        "year" => __("Year", "gdr2"),
                        "century" => __("Century", "gdr2"),
                        "millennium" => __("Millennium", "gdr2")
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
                    "name" => __("Currency", "gdr2"),
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

        /**
         * Get values for the a unit.
         *
         * @param string $name name of the unit
         * @return array unit values
         */
        public function get_values($name) {
            $data = $this->data[$name]["list"];
            $data = apply_filters("gdr2_unit_values_for_".$name, $data);
            return $data;
        }

        /**
         * Get the list of units.
         *
         * @return array associative array with units
         */
        public function get_units() {
            $data = array();
            foreach ($this->data as $unit => $obj) {
                $data[$unit] = $obj["name"];
            }
            return $data;
        }

        /**
         * Convert value from base unit value to selected unit.
         *
         * @param string $name name of the unit type
         * @param number $value value to convert
         * @param string $to name of the unit to convert into
         * @return number converted value
         */
        public function from_base($name, $value, $to) {
            if (!isset($this->data[$name])) return null;

            if ($name != "currency") {
                return $this->convert($name, $value, $this->data[$name]["base"], $to);
            } else {
                return null;
            }
        }

        /**
         * Convert value to base unit value from selected unit.
         *
         * @param string $name name of the unit type
         * @param number $value value to convert
         * @param string $from name of the unit to convert from
         * @return number converted value
         */
        public function to_base($name, $value, $from) {
            if (!isset($this->data[$name])) return null;

            if ($name != "currency") {
                return $this->convert($name, $value, $from, $this->data[$name]["base"]);
            } else {
                return null;
            }
        }

        /**
         * Convert value for unit.
         *
         * @param string $name name of the unit type
         * @param number $value value to convert
         * @param string $from name of the unit to convert from
         * @param string $to name of the unit to convert into
         * @return number converted value
         */
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

            if ($rate === false || is_null($rate) || empty($rate)) {
                return null;
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

    global $gdr2_units;
    $gdr2_units = new gdr2_Units();

    /**
     * Convert value from base for the units category to specified unit.
     *
     * @param string $name unit category name
     * @param mixed $value value to convert
     * @param string $to unit to convert to
     * @return mixed converted value
     */
    function gdr2_unit_from_base($name, $value, $to) {
        global $gdr2_units;
        return $gdr2_units->from_base($name, $value, $to);
    }

    /**
     * Convert value to base for the units category from specified unit.
     *
     * @param string $name unit category name
     * @param mixed $value value to convert
     * @param string $from unit to convert from
     * @return mixed converted value
     */
    function gdr2_unit_to_base($name, $value, $from) {
        global $gdr2_units;
        return $gdr2_units->to_base($name, $value, $from);
    }

    /**
     * Convert value from one unit to another for the specified unit category.
     *
     * @param string $name unit category name
     * @param mixed $value value to convert
     * @param string $from unit to convert from
     * @param string $to unit to convert to
     * @return mixed converted value
     */
    function gdr2_unit_convert($name, $value, $from, $to) {
        global $gdr2_units;
        return $gdr2_units->convert($name, $value, $from, $to);
    }
}

?>