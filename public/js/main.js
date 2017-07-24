$().ready(function() {
    $(window).scroll(function() {
    if ($(this).scrollTop() >= 400 && $(window).width() > 768) {
        $('.navbarmain').addClass('navbar-fixed-top');
    }
    else {
        $('.navbarmain').removeClass('navbar-fixed-top');
    }
  });
});