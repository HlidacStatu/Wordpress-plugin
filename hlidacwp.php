<?php
/*
Plugin Name: Hlídač Státu
Plugin URI: https://github.com/HlidacStatu/Wordpress-plugin/
Description: Plugin a shortcode pro snadné a spolehlivé vkládání widgetů Hlídače státu do textu.
Version: 1.0
Author: Hlídač Státu, Petr Štastný
Author URI:https://github.com/HlidacStatu/
*/

require_once __DIR__.'/HlidacWidget.php';

add_shortcode('hlidac-statu', array('\\Hlidac\\Wp\\HlidacWidget', 'getContent'));
