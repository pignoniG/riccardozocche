$( document ).ready(
    function(){ 

  var $top_gallery = $('.project_top_gallery').flickity({
      // options
      cellAlign: 'center',
      contain: true,
      autoPlay: true,
      wrapAround: true,
      imagesLoaded: true,
      "pageDots": false,
    });

    var $bottom_gallery = $('.project_bottom_gallery').flickity({
      // options
      
      fullscreen: true,
      contain: true,
      autoPlay: true,
      wrapAround: true,
      imagesLoaded: true,
      "pageDots": false,
      prevNextButtons: true,
    });





});

$(window).on('resize', function () {});