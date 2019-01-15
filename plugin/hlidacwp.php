<?php
/*
Plugin Name: Hlídač Státu
Plugin URI:
Description:
Version: 0.2
Author: Hlídač Státu, Petr Štastný
Author URI:https://github.com/HlidacStatu/Wordpress-plugin/
*/

require_once __DIR__.'/HlidacWidget.php';

add_shortcode('hlidac-statu', array('\\Hlidac\\Wp\\HlidacWidget', 'getContent'));
