<?php
/**
 * Plugin Name: Barista Arabika
 * Plugin URI: https://github.com/drajathasan/slims-barista-arabika
 * Description: Barista versi 2
 * Version: 2.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */

// get plugin instance
$plugin = \SLiMS\Plugins::getInstance();

require __DIR__ . '/vendor/autoload.php';

// registering menus or hook
$plugin->registerMenu("system", "Barista 2 Arabika", __DIR__ . "/index.php");