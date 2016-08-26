$(document).ready(function() {

  $('.animsition').animsition({
    inClass: 'fade-in-right-lg',
    outClass: 'fade-out-left-lg',
    linkElement: 'header a',
    inDuration: 800,
    outDuration: 400
  });

  $('.header').sticky({
    getWidthFrom: '.container',
    responsiveWidth: true,
    zIndex: 999
  });

  $('.header').on('sticky-start', function() {
    $('.description').html('We build <strong>GREAT</strong> apps');
  });

  $('.header').on('sticky-end', function() {
    $('.description').html('We build apps');
  });

  $('.grid-full h5').sticky({
    topSpacing: function() {
      if($('.header').height() !== 0) {
        return $('.header').height();
      }
      return 64;
    },
    getWidthFrom: '.container',
    responsiveWidth: true
  }).on('sticky-start', function() {
    $('.grid-full h5').append('<a class="stickyAnchor" href="#">Email us</a>');
  }).on('sticky-end', function() {
    $('a.stickyAnchor').remove();
  });


});
