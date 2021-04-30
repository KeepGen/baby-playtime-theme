$(document).ready(function () {

  // Connecting Accordion
  var header = $('.accordion-header');

  function accordion() {
    $(this).toggleClass('active');
    $(this).next().slideToggle('normal');
  }

  header.click(accordion);


  // Mobile menu
  let menuToggle = $('.header-menu-toggle');
  menuToggle.on('click', function (event) {
    event.preventDefault();
    $('.header-nav').slideToggle(200);
  })


  // Show/Hide the button
  window.onscroll = function () {
    var pageOffset = document.documentElement.scrollTop || document.body.scrollTop,
      btn = document.getElementById('totop');
    if (btn) btn.style.visibility = pageOffset > 450 ? 'visible' : 'hidden';
  };

});