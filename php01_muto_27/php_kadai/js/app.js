$(function () {
  $(".my_gu,.my_choki,.my_par").fadeIn("1500");
  $(".my_gu,.my_choki,.my_par").css({
    transform: "rotateY(0deg)",
  });
});

$(function () {
  setTimeout(function () {
    $(".gu,.choki,.par").fadeIn("1500");
    $(".gu,.choki,.par").css({
      transform: "rotateY(0deg)",
    });
  }, 1500);
});

$(function () {
  setTimeout(function () {
    $(".PC").fadeIn("1500");
  }, 2000);
});
