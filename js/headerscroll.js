$(function () {
    $(document).scroll(function () {
      var $nav = $("header");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      var $but = $(".upbutton");
      $but.toggleClass('scrolled', $(this).scrollTop() > $but.height());
    });
  });