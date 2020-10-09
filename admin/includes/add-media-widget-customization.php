<?php

add_filter('attachment_fields_to_edit', 'ibup_add_media_custom_field', 10, 2);
function ibup_add_media_custom_field($form_fields, $post) {

  $form_fields['imageus-configuration'] = array(
    'label' => 'imageus Configuration',
  );

  $form_fields['operation'] = array(
    'label' => 'Operation',
    'input' => 'html',
  );

  $form_fields['operation']['html'] = '<select name="operation" id="operation">';
  $form_fields['operation']['html'] .= '<option value="">Select Operation</option>';
  $form_fields['operation']['html'] .= '<option value="cdn">cdn</option>';
  $form_fields['operation']['html'] .= '<option value="cover">cover</option>';
  $form_fields['operation']['html'] .= '<option value="width">width</option>';
  $form_fields['operation']['html'] .= '<option value="height">height</option>';
  $form_fields['operation']['html'] .= '</select>';

  $form_fields['imageus-mode'] = array(
    'label' => __('Cover Mode'),
    'input' => 'hidden',
  );

  $form_fields['mode'] = array(
    'label' => '',
    'input' => 'html',
  );

  $form_fields['mode']['html'] = '<select id="mode" name="mode">';
  $form_fields['mode']['html'] .= '<option value="">Select Cover Modes</option>';
  $form_fields['mode']['html'] .= '<option value="center">center</option>';
  $form_fields['mode']['html'] .= '<option value="smart">smart</option>';
  $form_fields['mode']['html'] .= '<option value="attention">attention</option>';
  $form_fields['mode']['html'] .= '<option value="entropy">entropy</option>';
  $form_fields['mode']['html'] .= '<option value="face">face</option>';
  $form_fields['mode']['html'] .= '<option value="north">north</option>';
  $form_fields['mode']['html'] .= '<option value="northeast">northeast</option>';
  $form_fields['mode']['html'] .= '<option value="east">east</option>';
  $form_fields['mode']['html'] .= '<option value="southeast">southeast</option>';
  $form_fields['mode']['html'] .= '<option value="south">south</option>';
  $form_fields['mode']['html'] .= '<option value="southwest">southwest</option>';
  $form_fields['mode']['html'] .= '<option value="west">west</option>';
  $form_fields['mode']['html'] .= '<option value="northwest">northwest</option>';
  $form_fields['mode']['html'] .= '</select></div>';

  $form_fields['imageus-width'] = array(
    'label' => __('Width'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-height'] = array(
    'label' => __('Height'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-operation'] = array(
    'label' => __('Operation'),
    'input' => 'hidden',
    'value' => '',
  );

  $form_fields['imageus-options'] = array(
    'label' => __('Options'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-background-color'] = array(
    'label' => __('Background Color'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-brightness'] = array(
    'label' => __('Brightness'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-gamma'] = array(
    'label' => __('Gamma'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-hue'] = array(
    'label' => __('Hue'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-disablewebp'] = array(
    'label' => __('Disable Webp'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-extract'] = array(
    'label' => __('Extract'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-flip'] = array(
    'label' => __('Flip'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-flop'] = array(
    'label' => __('Flop'),
    'input' => 'text',
    'value' => '',
  );
  
  $form_fields['imageus-rotate'] = array(
    'label' => __('Rotate'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-blur'] = array(
    'label' => __('Blur'),
    'input' => 'text',
    'value' => '',
  );
  
  $form_fields['imageus-grayscale'] = array(
    'label' => __('Grayscale'),
    'input' => 'text',
    'value' => '',
  );

  $form_fields['imageus-negate'] = array(
    'label' => __('Negate'),
    'input' => 'text',
    'value' => '',
  );

  return $form_fields;
}

add_filter('attachment_fields_to_save', 'ibup_save_attachment_field', 10, 2);
function ibup_save_attachment_field($post, $attachment) {
  if (isset($attachment['imageus-height'])) {
    update_post_meta($post['ID'], 'imageus-height', $attachment['imageus-height']);
  }
  if (isset($attachment['imageus-width'])) {
    update_post_meta($post['ID'], 'imageus-width', $attachment['imageus-width']);
  }
  if (isset($attachment['imageus-operation'])) {
    update_post_meta($post['ID'], 'imageus-operation', $attachment['imageus-operation']);
  }
  if (isset($attachment['imageus-mode'])) {
    update_post_meta($post['ID'], 'imageus-mode', $attachment['imageus-mode']);
  }
  if (isset($attachment['imageus-background-color'])) {
    update_post_meta($post['ID'], 'imageus-background-color', $attachment['imageus-background-color']);
  }
  if (isset($attachment['imageus-brightness'])) {
    update_post_meta($post['ID'], 'imageus-brightness', $attachment['imageus-brightness']);
  }
  if (isset($attachment['imageus-gamma'])) {
    update_post_meta($post['ID'], 'imageus-gamma', $attachment['imageus-gamma']);
  }
  if (isset($attachment['imageus-hue'])) {
    update_post_meta($post['ID'], 'imageus-hue', $attachment['imageus-hue']);
  }
  if (isset($attachment['imageus-options'])) {
    update_post_meta($post['ID'], 'imageus-options', $attachment['imageus-options']);
  }
  if (isset($attachment['imageus-disablewebp'])) {
    update_post_meta($post['ID'], 'imageus-disablewebp', $attachment['imageus-disablewebp']);
  }
  if (isset($attachment['imageus-extract'])) {
    update_post_meta($post['ID'], 'imageus-extract', $attachment['imageus-extract']);
  }
  if (isset($attachment['imageus-flip'])) {
    update_post_meta($post['ID'], 'imageus-flip', $attachment['imageus-flip']);
  }
  if (isset($attachment['imageus-flop'])) {
    update_post_meta($post['ID'], 'imageus-flop', $attachment['imageus-flop']);
  }
  if (isset($attachment['imageus-rotate'])) {
    update_post_meta($post['ID'], 'imageus-rotate', $attachment['imageus-rotate']);
  }
  if (isset($attachment['imageus-blur'])) {
    update_post_meta($post['ID'], 'imageus-blur', $attachment['imageus-blur']);
  }
  if (isset($attachment['imageus-grayscale'])) {
    update_post_meta($post['ID'], 'imageus-grayscale', $attachment['imageus-grayscale']);
  }
  if (isset($attachment['imageus-negate'])) {
    update_post_meta($post['ID'], 'imageus-negate', $attachment['imageus-negate']);
  }
  


  return $post;
}

add_filter('image_send_to_editor', 'ibup_custom_html_template', 1, 8);
function ibup_custom_html_template($html, $id, $caption, $title, $align, $url, $size, $alt) {
  list($img_src, $width, $height) = image_downsize($id, $size);
  $original_image = wp_get_attachment_image_src($id, 'full');

  $image = new DOMDocument();
  $image->loadXML($html);
  $imgs = $image->getElementsByTagName('img');

  foreach ($imgs as $img) {
    $field_operation = get_post_meta($id, 'imageus-operation', true);
    $field_mode = get_post_meta($id, 'imageus-mode', true);
    $field_width = get_post_meta($id, 'imageus-width', true);
    $field_height = get_post_meta($id, 'imageus-height', true);
    $field_options = get_post_meta($id, 'imageus-options', true);
    $field_background_color = get_post_meta($id, 'imageus-background-color', true);
    $field_brightness = get_post_meta($id, 'imageus-brightness', true);
    $field_gamma = get_post_meta($id, 'imageus-gamma', true);
    $field_hue = get_post_meta($id, 'imageus-hue', true);
    $field_disablewebp = get_post_meta($id, 'imageus-disablewebp', true);
    $field_extract = get_post_meta($id, 'imageus-extract', true);
    $field_flip = get_post_meta($id, 'imageus-flip', true);
    $field_flop = get_post_meta($id, 'imageus-flop', true);
    $field_rotate = get_post_meta($id, 'imageus-rotate', true);
    $field_blur = get_post_meta($id, 'imageus-blur', true);
    $field_grayscale = get_post_meta($id, 'imageus-grayscale', true);
    $field_negate = get_post_meta($id, 'imageus-negate', true);

    if ($field_operation) {
      // only when the user selects a operation we should use the original image
      $img->setAttribute('src', $original_image[0]);
      $img->setAttribute('imageus-operation', $field_operation);
    }

    if ($field_mode) {
      $img->setAttribute('imageus-mode', $field_mode);
    }

    if ($field_width) {
      $img->setAttribute('imageus-width', $field_width);
    }

    if ($field_height) {
      $img->setAttribute('imageus-height', $field_height);
    }

    if ($field_options) {
      $img->setAttribute('imageus-options', $field_options);
    }

    if ($field_background_color) {
      $img->setAttribute('imageus-background-color', $field_background_color);
    }

    if ($field_brightness) {
      $img->setAttribute('imageus-brightness', $field_brightness);
    }

    if ($field_gamma) {
      $img->setAttribute('imageus-gamma', $field_gamma);
    }

    if ($field_hue) {
      $img->setAttribute('imageus-hue', $field_hue);
    }

    if ($field_disablewebp) {
      $img->setAttribute('imageus-disablewebp', $field_disablewebp);
    }

    if ($field_extract) {
      $img->setAttribute('imageus-extract', $field_extract);
    }

    if ($field_flip) {
      $img->setAttribute('imageus-flip', $field_flip);
    }

    if ($field_flop) {
      $img->setAttribute('imageus-flop', $field_flop);
    }

    if ($field_rotate) {
      $img->setAttribute('imageus-rotate', $field_rotate);
    }

    if ($field_blur) {
      $img->setAttribute('imageus-blur', $field_blur);
    }

    if ($field_grayscale) {
      $img->setAttribute('imageus-grayscale', $field_grayscale);
    }

    if ($field_negate) {
      $img->setAttribute('imageus-negate', $field_negate);
    }

  }

  return $image->saveHTML();
}

add_filter('tiny_mce_before_init', 'ibup_override_mce_options');
function ibup_override_mce_options($initArray) {
  $opts = '*[*]';
  $initArray['valid_elements'] = $opts;
  $initArray['extended_valid_elements'] = $opts;
  return $initArray;
}

add_action('media_buttons', 'ibup_reset_attribute_of_images');
function ibup_reset_attribute_of_images() {
  $query_images_args = array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
  );

  $query_images = new WP_Query($query_images_args);

  $images = array();
  foreach ($query_images->posts as $image) {
    $images_id = $image->ID;
    $myvals = get_post_meta($images_id);
    foreach ($myvals as $key => $val) {
      foreach ($val as $vals) {
        if (($key == 'imageus-operation') || ($key == 'imageus-width') || ($key == 'imageus-height') || ($key == 'imageus-mode') || ($key == 'imageus-options') || ($key == 'imageus-background-color')) {
          update_post_meta($images_id, $key, '');
        }
      }
    }
  }

}
