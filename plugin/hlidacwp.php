<?php
/*
Plugin Name: Hlídač Státu
Plugin URI:
Description:
Version: 0.1
Author: Hlídač Státu
Author URI:
*/

require_once __DIR__.'/HlidacWidget.php';

add_shortcode('hlidac-widget', array('\\Hlidac\\Wp\\HlidacWidget', 'getContent'));
