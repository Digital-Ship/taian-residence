

jQuery(function ($) {
  new WOW().init();
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

  $(".btn_open_popup").click(function () {
    const targetId = $(this).data('popup');
    openPopup();
    $(targetId).addClass('open');
  })
  $(".btn_close_popup, .plan-popup .layer").click(function () {
    $(this).closest(".plan-popup").removeClass("open");
    closePopup();
  })


  $(".btn_open_movie").click(function () {
    const targetId = $(this).data('popup');
    openPopup();
    $(targetId).addClass('open');
  })
  $(".btn_close_mv_popup, .movie-popup .layer").click(function () {
    $(this).closest(".movie-popup").removeClass("open");
    closePopup();
  })
  function openPopup() {
    const scrollbarWidth = getScrollbarWidth();
    $('body').css('padding-right', scrollbarWidth);
    $('body').addClass('open-popup')
  }
  function closePopup() {
    $('body').css('padding-right', 0);
    $('body').removeClass('open-popup')
  }
  function getScrollbarWidth() {

    // Creating invisible container
    const outer = document.createElement('div');
    outer.style.visibility = 'hidden';
    outer.style.overflow = 'scroll'; // forcing scrollbar to appear
    outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
    document.body.appendChild(outer);

    // Creating inner element and placing it in the container
    const inner = document.createElement('div');
    outer.appendChild(inner);

    // Calculating difference between container's full width and the child width
    const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);

    // Removing temporary elements from the DOM
    outer.parentNode.removeChild(outer);

    return scrollbarWidth;

  }

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
