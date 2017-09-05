$(document).ready(function() {
  $("a").click(function() {
    var href = $(this).attr("href");
    History.pushState({}, '', href);
    $(".main").load(href);
    return false;
  });


});
