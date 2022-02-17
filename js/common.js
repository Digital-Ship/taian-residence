

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
    event.preventDefault(); const targetId = $(this).attr('href');
    const goTo = $(targetId).offset().top
    scrollTo(goTo);
  })
  function scrollTo(goTo = 0) {
    $('html,body').animate({ scrollTop: goTo }, 'slow');
  }
})
