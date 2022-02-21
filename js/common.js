

jQuery(function ($) {
  $("#btn_open_menu").click(() => {
    $('body').addClass('nav-open')
  });
  $("#btn_close_menu, #nav-wrap .anchor-link").click(() => {
    $('body').removeClass('nav-open')
  });
  $("#back_to_top").click(() => {
    scrollTo();
  })
  $(".anchor-link").click(function (event) {
    event.preventDefault();
    const targetId = $(this).attr('href');
    const goTo = $(targetId).offset().top
    scrollTo(goTo);
  })
  $(".btn_close_popup, .plan-popup .layer").click(function () {
    $(this).closest(".plan-popup").removeClass("open")
  })
  $(".btn_open_popup").click(function () {
    console.log('btn_open_popup')
    const targetId = $(this).data('popup');
    console.log(targetId)
    $(targetId).addClass('open');
  })
  function scrollTo(goTo = 0) {
    $('html,body').animate({ scrollTop: goTo }, 'slow');
  }
  let menuOffsetTop = $("#btn_open_menu").offset().top;

  $(window).scroll(function () {
    if ($(window).scrollTop() > menuOffsetTop) {
      $('body').addClass('menu-fixed')
    } else {
      $('body').removeClass('menu-fixed');
    }
  });
})
