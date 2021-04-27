$(document).ready(function () {

  // Connecting Accordion
  var header = $('.accordion-header');

  function accordion() {
    $(this).toggleClass('active');
    $(this).next().slideToggle('normal');
  }

  header.click(accordion);


  // Mobile menu
  $('.header-menu-toggle').change(function(){
    if($(this).is('.header-nav-desktop')){
      $('.header-nav').addClass('.header-nav-mobile');
      $('.header-nav').removeClass('header-nav-desktop');
    }else{
      $('.header-nav').removeClass('header-nav-mobile');
      $('.header-nav').addClass('header-nav-desktop');
    }
  });

});