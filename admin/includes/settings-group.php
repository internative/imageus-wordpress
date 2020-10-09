<?php

add_action('admin_init', 'ibup_register_settings');
function ibup_register_settings() {
    register_setting('imageus-settings-group', 'ibup_imageus_active');
    register_setting('imageus-settings-group', 'ibup_imageus_hosts');
}
