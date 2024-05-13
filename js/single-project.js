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
      cellAlign: 'center',
      contain: true,
      autoPlay: true,
      wrapAround: true,
      imagesLoaded: true,
      "pageDots": false,
    });


});

$(window).on('resize', function () {});