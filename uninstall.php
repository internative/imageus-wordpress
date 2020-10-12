<?php

register_uninstall_hook(imgus_BASENAME, 'imgus_uninstall_plugin');

function imgus_uninstall_plugin() {
  $prefix = 'imgus_';
  $options = array('plugin_redirect', 'imageus_hosts', 'imageus_source', 'imageus_active');

  array_map(function($option) {
    delete_option($prefix . $option);
    delete_site_option($prefix . $option);
  }, $options);
}
