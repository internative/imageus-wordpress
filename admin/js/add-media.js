(function ($) {
  var showOrHideFields = function () {
    var attachment;

    $(".compat-field-mode").hide();
    $(".compat-field-imageus-width").hide();
    $(".compat-field-imageus-height").hide();

    var value = $("#operation").val().split("-")[0];

    if (value == "cover") {
      $(".compat-field-mode").show();
      $(".compat-field-imageus-width").show();
      $(".compat-field-imageus-height").show();
    } else if (value == "width") {
      $(".compat-field-imageus-width").show();
    } else if (value == "height") {
      $(".compat-field-imageus-height").show();
    }
  };

  $(document).on("click", ".attachment", function () {
    showOrHideFields();
    attachment = $(this).attr("data-id");
  });

  $(document).on("change", "#operation", function () {
    showOrHideFields();

    var selected = $("#operation option:selected").val();
    $('input[name="attachments[' + attachment + '][imageus-operation]"]')
      .val(selected)
      .trigger("change");
  });

  $(document).on("keyup", ".compat-item input", function () {
    $(this).trigger("change");
  });

  $(document).on("change", "#mode", function () {
    var selected = $("#mode option:selected").val();
    $('input[name="attachments[' + attachment + '][imageus-mode]"]')
      .val(selected)
      .trigger("change");
  });
})(jQuery);
