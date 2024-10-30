<?php
/*
Plugin Name: Cool Weather
Plugin URI: http://www.coolcode.cn/show-153-1.html
Description: this plugin allow you add the custom weather reports into your blog.
Version: 2.1
Author: andot, bawbaw
Author URI: http://www.coolcode.cn/
*/

class CoolWeather {
    var $pluginpath = "/wp-content/plugins/cool-weather";
    function CoolWeather() {
        $this->pluginpath = get_settings('siteurl') . $this->pluginpath;
    }

    function add_css() {
        echo "<link rel=\"stylesheet\" href=\"{$this->pluginpath}/coolweather.css\" />\n";
    }

    function add_js() {
        if ((!defined('PHPRPC_JS_CLIENT_LOADED')) || (PHPRPC_JS_CLIENT_LOADED == false)) {
            echo "<script type=\"text/javascript\" src=\"{$this->pluginpath}/phprpc_client.js\"></script>\n";
            define('PHPRPC_JS_CLIENT_LOADED', true);
        }
        echo "<script type=\"text/javascript\" src=\"{$this->pluginpath}/coolweather.js\"></script>\n";
    }
    function show() {
        echo '<div id="coolweather_container"></div><script type="text/javascript">';
        echo "coolweather_iconspath = '{$this->pluginpath}/icons/';";
        echo 'coolweather_init();</script>';
    }
}

$CoolWeather = new CoolWeather();
add_action('wp_head', array(&$CoolWeather, 'add_css'));
add_action('wp_head', array(&$CoolWeather, 'add_js'));
?>