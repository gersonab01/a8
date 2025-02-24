$(document).ready(function () {
  $('.btn-nav').on('click', function () {
    $('.nav').toggleClass('active');
    $('.btn-nav i').toggleClass('fa-bars-staggered fa-close');
  });
});
