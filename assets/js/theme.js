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
  $('.home-store .col').first().addClass('store-col');

  $('#sign').hide();
  $('#photography').hide();

  $('#Calligraphy').click(function(){
    $('#sign').hide();
    $('.home-store .col:nth-child(2)').removeClass('store-col');
    $('#photography').hide();
    $('.home-store .col:nth-child(3)').removeClass('store-col');
    $('#calligraphy').show();
    $('.home-store .col').first().addClass('store-col');
  })

  $('#Signs').click(function(){
    $('#sign').show();
    $('.home-store .col:nth-child(2)').addClass('store-col');
    $('#photography').hide();
    $('.home-store .col:nth-child(3)').removeClass('store-col');
    $('#calligraphy').hide();
    $('.home-store .col').first().removeClass('store-col');

  })

  $('#Photography').click(function(){
    $('#sign').hide();
    $('.home-store .col:nth-child(2)').removeClass('store-col');
    $('#photography').show();
    $('.home-store .col:nth-child(3)').addClass('store-col');
    $('#calligraphy').hide();
    $('.home-store .col').first().removeClass('store-col');
  })

});
