jQuery(document).on("tinymce-editor-init", function(event, editor) {
  imgus_add_imageus_url();

  if (wp.media) {
    wp.media.view.Modal.prototype.on("open", function() {
      var selection = wp.media.frame.state().get("selection");

      selection.on("selection:single", function(event) {
        jQuery("#operation").trigger("change");
      });
    });
  }

  tinymce.activeEditor.on("SetContent", function(e) {
    imgus_add_imageus_url();
  });
});

function imgus_add_imageus_url() {
  var images = jQuery(".mce-container")
    .contents()
    .find("iframe")
    .contents()
    .find("img");
  images.each((i, img) => {
    var elm = jQuery(img);
    var src = elm.attr("src");

    // if (window.location.protocol == "http:" && !src.contains("http")) {
    //   src = "http" + src;
    // }

    // if (window.location.protocol == "https:" && !src.contains("https")) {
    //   src = "https" + src;
    // }

    var newUrl = imgus_mountimageusUrl(src, {
      operation: elm.attr("imageus-operation"),
      mode: elm.attr("imageus-mode"),
      width: elm.attr("imageus-width"),
      height: elm.attr("imageus-height"),
      options: elm.attr("imageus-options"),
      background_color: elm.attr("imageus-background-color"),
      brightness: elm.attr("imageus-brightness"),
      gamma: elm.attr("imageus-gamma"),
      hue: elm.attr("imageus-hue"),
      disablewebp: elm.attr("imageus-disablewebp"),
      extract: elm.attr("imageus-extract"),
      flip: elm.attr("imageus-flip"),
      flop: elm.attr("imageus-flop"),
      rotate: elm.attr("imageus-rotate"),
      blur: elm.attr("imageus-blur"),
      grayscale: elm.attr("imageus-grayscale"),
      negate: elm.attr("imageus-negate")
    });

    elm.attr("src", newUrl);
  });
}
