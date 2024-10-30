=== Cool Weather ===
Contributors: andot, bawbaw
Tags: weather, forecast, stats, sidebar, ajax, phprpc
Requires at least: 1.5
Tested up to: 2.7
Stable tag: 2.1

This plugin allow you add the custom weather reports into your blog.

== Description ==

This plugin allows you to add weather forecast with an Ajax effect into your blog. Which location should be shown can be customed by the reader. You needn’t make out the location ID by yourself, you just need to fill in the name of city. If there are more than one city matched your input, you can choose the one you want from the dropdown menu. The weather forecast provides the current conditions and two days’ weather report. This is a internationalization plugin, it now includes Simplified Chinese, Traditional Chinese, English, French, German, Japanese, Spanish, Italian, Dutch, Portuguese, Romanian and Catalan translation, it can be auto set the language according to the browser which you use. The weather information is from AccuWeather.com®.

== Installation ==

1. Download this plugin: coolweather.zip and extract it into the wordpress plugins directory.

2. Activate it in administrator’s interface.

3. Modify your themes. Add the following code:
<?php if (class_exists('CoolWeather')) { $coolweather = new CoolWeather(); $coolweather->show(); } ?>

into the place where you want to show the weather forecast.

== Screenshots ==

1. Screenshot
