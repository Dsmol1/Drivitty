jQuery(document).ready(function(){

  // add class to link
  jQuery('.secondary-menu li').addClass('button');
  jQuery('.secondary-menu li.current-menu-item').addClass('button--active');
  jQuery('.secondary-menu li').not('.current-menu-item').addClass('button--inactive');

  if (window.location.href.indexOf('features') > -1) {
    jQuery('.secondary-menu li:nth-child(1)').removeClass('button--inactive').addClass('current-menu-item button--active');
  }

  // Close mobile menu on anchor click
  var menu = document.getElementById('menu');
  var closeIcon = document.getElementById("closeIcon");

  menu.addEventListener('click', handleMenuClick);
  function handleMenuClick(event) {
    if (event.target instanceof HTMLAnchorElement) {
      closeIcon.checked = false;
    }
  }

  // Features slider
  jQuery('.features__slider-wrapper').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }
    ]
  });

});
