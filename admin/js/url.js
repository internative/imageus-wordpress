function ibup_mountimageusUrl(
  src,
  {
    operation,
    mode,
    width,
    height,
    options,
    background_color,
    brightness,
    gamma,
    hue,
    disablewebp,
    extract,
    flip,
    flop,
    rotate,
    blur,
    grayscale,
    negate
  }
) {
  var serviceUrl = "sd";
  var template = "/:operation/:options/";

  if (operation === "cover") {
    template =
      "/:operation::mode/:widthx:height/:options/:background-color/:brightness/:gamma/:hue/:disablewebp/:extract/:flip/:flop/:rotate/:blur/:grayscale/:negate/";
  } else if (operation === "width") {
    template =
      "/:operation/:width/:options/:background-color/:brightness/:gamma/:hue/:disablewebp/:extract/:flip/:flop/:rotate/:blur/:grayscale/:negate/";
  } else if (operation === "height") {
    template =
      "/:operation/:height/:options/:background-color/:brightness/:gamma/:hue/:disablewebp/:extract/:flip/:flop/:rotate/:blur/:grayscale/:negate/";
  }

  if (window.location.protocol == "http:") {
    src = "http:" + src;
  }

  if (window.location.protocol == "https:") {
    src = "https:" + src;
  }

  var finalUrl = template
    .replace(":operation", operation || "cdn")
    .replace(":mode", mode || "")
    .replace(":width", width || "")
    .replace(":height", height || "")
    .replace(":options", options || "")
    .replace(":background-color", background_color || "")
    .replace(":brightness", brightness || "")
    .replace(":gamma", gamma || "")
    .replace(":hue", hue || "")
    .replace(":disablewebp", disablewebp || "")
    .replace(":extract", extract || "")
    .replace(":flip", flip || "")
    .replace(":flop", flop || "")
    .replace(":rotate", rotate || "")
    .replace(":blur", blur || "")
    .replace(":grayscale", grayscale || "")
    .replace(":negate", negate || "")
    .replace(/\/\//g, "/")
    .replace(/:\//g, "/");

  return serviceUrl + src + finalUrl;
}
