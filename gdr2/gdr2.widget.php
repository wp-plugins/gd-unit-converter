<?php

/*
Name:    gdr2_Widget
Version: 2.5.6
Author:  Milan Petrovic
Email:   milan@gdragon.info
Website: http://www.dev4press.com/libs/gdr2/
Info:    Expanded base widget class

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

if (!class_exists('gdr2_Widget')) {
    /**
     * Base widget class expanding default WordPress class.
     */
    class gdr2_Widget extends WP_Widget {
        var $widget_visibility_display = "_display";
        var $widget_visibility_active = true;
        var $widget_cached_results = "_cached";
        var $widget_cached_active = true;
        var $widget_cached_exclude = array("title", "_display", "_cached");

        var $widget_name = "gdr2: Base Widget Class";
        var $widget_description = "Information about the widget";
        var $widget_base = "gdr2_widget";
        var $widget_domain = "gdr2_widgets";
        var $widget_id;
        var $cache_key = "";
        var $cache_prefix = "gdrw";
        var $cache_active = false;
        var $cache_time = 0;

        var $defaults = array(
            "title" => "Base Widget Class",
            "_display" => "all",
            "_cached" => 6
        );

        /**
         * Expanded constructor from the WordPress base widget class.
         */
        function __construct($id_base = false, $name = "", $widget_options = array(), $control_options = array()) {
            $this->_actions();

            $widget_options = empty($widget_options) ? array('classname' => 'cls_'.$this->widget_base, 'description' => $this->widget_description) : $widget_options;
            $control_options = empty($control_options) ? array('width' => 400) : $control_options;
            parent::__construct($this->widget_base, $this->widget_name, $widget_options, $control_options);

            if (!defined("GDR2_CACHE_ACTIVE") || !GDR2_CACHE_ACTIVE) {
                $this->widget_cached_active = false;
            }
        }

        /**
         * Create unique name that can be used for filter purposes.
         *
         * @param string $name name to use to create filter
         * @return string formated name
         */
        private function _filter($name = "results") {
            $base = substr($this->folder_name, 5);
            return $this->widget_base."_".$name."_".str_replace("-", "", $base);
        }

        /**
         * Check if the widget should be visible.
         *
         * @param array $instance list of options for the widget
         * @return bool true if the widget should be visible, false if not
         */
        private function _visibile($instance) {
            if (!$this->widget_visibility_active) return true;

            $visible = false;
            $_display = $this->widget_visibility_display;
            if (isset($instance[$_display])) {
                $logged = is_user_logged_in();
                if ($instance[$_display] == "all" || ($instance[$_display] == "user" && $logged) || ($instance[$_display] == "visitor" && !$logged)) $visible = true;
            } else $visible = true;

            $visible = apply_filters($this->widget_domain."_visibility", $visible, $this);
            return apply_filters($this->_filter("visibility"), $visible, $this);
        }

        /**
         * Create unique id that should be used for JavaScript or other 
         * purposes.
         *
         * @param string $args basic widget arguments used to base the id on
         * @return string formated id
         */
        private function _widget_id($args) {
            $this->widget_id = str_replace(array("-", "_"), array("", ""), $args["widget_id"]);
        }

        /**
         * Create string to be used for cache.
         *
         * @param type $instance list of options for the widget
         */
        private function _cache_key($instance) {
            $this->cache_active = $this->_cache_active($instance);
            if ($this->cache_active) {
                $copy = array();
                foreach ($instance as $key => $value) {
                    if (!in_array($key, $this->widget_cached_exclude)) $copy[$key] = $value;
                }
                $this->cache_key = $this->cache_prefix."_".md5($this->widget_base."_".serialize($copy));
            }
        }

        /**
         * Check if the widget should be cached
         *
         * @param array $instance list of options for the widget
         * @return bool true if the widget should be cached, false if not
         */
        private function _cache_active($instance) {
            $cached = isset($instance[$this->widget_cached_results]) ? intval($instance[$this->widget_cached_results]) : 0;
            $cached = apply_filters($this->widget_domain."_cached", $cached, $this);
            $this->cache_time = apply_filters($this->_filter("cached"), $cached, $this);

            return $this->widget_cached_active && $this->cache_time > 0;
        }

        /**
         * Attempt to get cached widget rendering, or render from scratch.
         *
         * @param type $instance list of options for the widget
         * @return string rendered widget output
         */
        private function _cached($instance) {
            if ($this->cache_active && $this->cache_key !== "") {
                $results = gdr2c_get($this->cache_key);
                if ($results === false) {
                    $results = $this->results($instance);
                    gdr2c_set($this->cache_key, $results, $this->cache_time * 3600);
                }
                return $results;
            } else {
                return $this->results($instance);
            }
        }

        /**
         * Actions or filters to set up when the widget instance is constructed.
         */
        public function _actions() { }

        /**
         * Render the widget, based on the base WordPress widget class.
         *
         * @param mixed $args settings for the widget
         * @param mixed $instance widget instance settings
         */
        public function widget($args, $instance) {
            $args = apply_filters($this->_filter("arguments"), $args, $this);
            extract($args, EXTR_SKIP);

            $this->_widget_id($args);
            $this->_cache_key($instance);

            if ($this->_visibile($instance)) {
                $results = $this->_cached($instance);
                echo $before_widget;
                if (isset($instance["title"]) && $instance["title"] != '') {
                    echo $before_title;
                    echo $this->title($instance);
                    echo $after_title;
                }
                echo $this->render($results, $instance);
                echo $after_widget;
            }
        }

        /**
         * Prepare widget title for display.
         *
         * @param type $instance widget instance settings
         * @return string prepared title
         */
        public function title($instance) {
            return $instance["title"];
        }

        public function form($instance) {
            $instance = wp_parse_args((array)$instance, $this->defaults);
        }

        public function display_select_options($options, $selected = "", $select_name = "", $select_id = "", $class = "", $style = "") {
            echo '<select class="'.$class.'" style="'.$style.'" id="'.$select_id.'" name="'.$select_name.'">'.GDR2_EOL;
            foreach ($options as $key => $name) {
                $sel = "";
                if ($selected == $key) $sel = ' selected="selected"';
                echo sprintf('<option value="%s"%s>%s</option>%s', $key, $sel, $name, GDR2_EOL);
            }
            echo '</select>'.GDR2_EOL;
        }

        public function excerpt($content, $words_count = 16) {
            $text = trim($content);
            $text = str_replace(']]>', ']]&gt;', $text);
            $text = strip_tags($text);
            $text = str_replace('"', '\'', $text);

            if ($words_count > 0) {
                $words = explode(' ', $text, $words_count + 1);
                if (count($words) > $words_count) {
                    $words = array_slice($words, 0, $words_count);
                    $text = implode(' ', $words)."...";
                }
            }
            return $text;
        }

        public function prepare_sql($instance, $select, $from, $where, $group, $order, $limit) {
            $select = apply_filters($this->_filter("sql_select"), $select, $instance);
            $from = apply_filters($this->_filter("sql_from"), $from, $instance);
            $where = apply_filters($this->_filter("sql_where"), $where, $instance);
            $group = apply_filters($this->_filter("sql_group"), $group, $instance);
            $order = apply_filters($this->_filter("sql_order"), $order, $instance);
            $limit = apply_filters($this->_filter("sql_limit"), $limit, $instance);

            $sql = "SELECT ".$select." FROM ".$from;
            if ($where != "") $sql.= " WHERE ".$where;
            if ($group != "") $sql.= " GROUP BY ".$group;
            if ($order != "") $sql.= " ORDER BY ".$order;
            if ($limit != "") $sql.= " LIMIT ".$limit;

            return $sql;
        }

        public function update($new_instance, $old_instance) {
            $instance = $old_instance;

            $instance['title'] = strip_tags(stripslashes($new_instance['title']));

            return $instance;
        }

        public function simple_render($instance = array()) {
            $instance = shortcode_atts($this->defaults, $instance);
            $results = $this->results($instance);
            return $this->render($results, $instance);
        }

        public function prepare($instance, $results) { return $results; }

        public function results($instance) { return null; }

        public function render($results, $instance) { echo $results; }
    }
}

?>