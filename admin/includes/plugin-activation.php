<?php

register_activation_hook(imgus_BASENAME, 'imgus_plugin_activate');
function imgus_plugin_activate() {
  add_option('imgus_plugin_redirect', true);
}

add_action('admin_init', 'imgus_plugin_redirect');
function imgus_plugin_redirect()
{
  if (get_option('imgus_plugin_redirect', false)) {
    delete_option('imgus_plugin_redirect');
    exit(wp_redirect("admin.php?page=imageus"));
  }
}
