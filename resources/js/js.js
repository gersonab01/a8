$(document).ready(function () {
  $(".btn-nav").on("click", function () {
    $(".menu").toggleClass("active");
    $(".btn-nav i").toggleClass("fa-bars-staggered fa-close");
  });
});
