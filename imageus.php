<?php
/*
Plugin Name: imageus - Resimleriniz İçin Dönüştürme, Sıkıştırma ve CDN
Description: Hızlı ve güvenli resim işleme servisi.
Version: 0.1
Author: imageus.dev
Author URI: https://imageus.dev
License: MIT
License URI: https://opensource.org/licenses/MIT
*/

define('imgus_API', 'https://img.imageus.dev');
define('imgus_BASENAME', plugin_basename(__FILE__));

require plugin_dir_path(__FILE__) . '/includes/url.php';
require plugin_dir_path(__FILE__) . '/admin/imageus-admin.php';
require plugin_dir_path(__FILE__) . '/public/imageus-public.php';
require plugin_dir_path(__FILE__) . '/uninstall.php';