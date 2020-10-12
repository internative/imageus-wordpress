<?php

add_action('wp_head', 'imgus_buffer_start');
function imgus_buffer_start() {
  if (!wp_doing_ajax() && imgus_is_activated()) {
    ob_start("imgus_buffer_callback");
  }
}

add_action('wp_footer', 'imgus_buffer_end');
function imgus_buffer_end() {
  if (!wp_doing_ajax() && imgus_is_activated()) {
    ob_end_flush();
  }
}

// wraps the entire blog html output
function imgus_buffer_callback($buffer, $phase) {
  if ($phase & PHP_OUTPUT_HANDLER_FINAL || $phase & PHP_OUTPUT_HANDLER_END) {
    return imgus_apply_imageus_urls($buffer);
  }

  return $buffer;
}
