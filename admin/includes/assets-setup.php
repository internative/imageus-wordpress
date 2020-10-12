<?php

add_action('wp_footer', 'imgus_assets');
add_action('wp_enqueue_scripts', 'imgus_assets_tag');

function imgus_assets_tag() {
    if (imgus_is_activated()) {
        // increase compatibility with older PHP versions
        $hosts = join(',', array_map(function($host) {
            return '\'' . $host. '\'';
        }, imgus_get_authorised_hosts()));

        $source = htmlspecialchars(imgus_get_source(), ENT_QUOTES, 'UTF-8');

        echo '<script type="text/javascript">window.initImageUs = {matchHosts: [' . $hosts . '], source: "'. $source .'"};</script>';
    }
}

function imgus_assets() {
    if (imgus_is_activated()) {
        wp_enqueue_script( 'imageus-web', 'https://img.imageus.dev/imageus.js', array(), false, true );
    }
}
