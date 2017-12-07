jQuery( document ).ready(function( $ ) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

  // Browser detection via Bowser (https://github.com/lancedikson/bowser) - add detection as needed
  if( bowser.msie && bower.version === 11 ) {
    $('body').addClass('ie-11');
  } else if ( bowser.safari ) {
    $('body').addClass('safari');
  }

  // Nifty Nav
  $('#nifty-nav-toggle').niftyNav();

  // Slick Slider
  // Testimonial Slider
  if( $('.home-hero').length > 0 ) {
    $('.home-slider').slick({
      autoplay: true,
      autoplaySpeed: 6000,
      slidesToShow: 1,
      adaptiveHeight: false,
      dots: false,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            arrows: false,
          },
        },
      ],
    });
  }

  // Form Buttons
  $('input[type=submit]').addClass('button button--dark');

  // Shop page
  $('#sign').hide();
  $('#photography').hide();

  $('#Calligraphy').click(function(){
    $('#sign').hide();
    $('#photography').hide();
    $('#calligraphy').show();
  })

  $('#Signs').click(function(){
    $('#sign').show();
    $('#photography').hide();
    $('#calligraphy').hide();
  })

  $('#Photography').click(function(){
    $('#sign').hide();
    $('#photography').show();
    $('#calligraphy').hide();
  })

});
