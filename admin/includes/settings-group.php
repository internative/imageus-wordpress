<?php

add_action('admin_init', 'imgus_register_settings');
function imgus_register_settings() {
    register_setting('imageus-settings-group', 'imgus_imageus_active');
    register_setting('imageus-settings-group', 'imgus_imageus_hosts');
}
