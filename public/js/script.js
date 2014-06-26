(function($)
{
  // rubah ikon panah ketika menu diklik
  $(".menu").click(function()
  {
    var icon = $(this).find(".arrow-menu");

    if (icon.hasClass("glyphicon-chevron-right"))
    {
      icon
        .removeClass("glyphicon-chevron-right")
        .addClass("glyphicon-chevron-down")
    }
    else
    {
      icon
        .removeClass("glyphicon-chevron-down")
        .addClass("glyphicon-chevron-right")
    };
  });
})(jQuery);