$( document ).ready(
    function(){ 



        var maxHeight = -1;
        $('.service_grid_item').each(function() {
            $(this).height(0);
        });

        $('.service_grid_item').each(function() {
            maxHeight = maxHeight > $(this).prop('scrollHeight') ? maxHeight : $(this).prop('scrollHeight');
        });

        $('.service_grid_item').each(function() {
            $(this).height(maxHeight+40);
        });


   var $top_gallery = $('.methodology_gallery').flickity({
      // options
      cellAlign: 'center',
      contain: true,
      autoPlay: true,
      wrapAround: true,
      imagesLoaded: true,
      "pageDots": false,
    });



  



    var $caption = $('h3.methodology_gallery_caption');
    $caption.text( $('.methodology_gallery_image.is-selected').attr("alt") )
    

    // Flickity instance
    var flkty = $top_gallery.data('flickity');

    $top_gallery.on( 'select.flickity', function() {
    // set image caption using img's alt
     $caption.text( flkty.selectedElement.getAttribute("alt") )
    });



var $grid = $('.service_grid').isotope({
    transitionDuration: 0,
    percentPosition: true,

  itemSelector: '.service_grid_item'
});

$grid.imagesLoaded().progress( function() {
     var maxHeight = -1;
         $('.service_grid_item').each(function() {
            $(this).height(0);
        });

        $('.service_grid_item').each(function() {
            maxHeight = maxHeight > $(this).prop('scrollHeight') ? maxHeight : $(this).prop('scrollHeight');
        });

        $('.service_grid_item').each(function() {
            $(this).height(maxHeight+40);
        });

  $grid.isotope('layout');



    
});

});

$(window).on('resize', function () {
    var maxHeight = -1;
         $('.service_grid_item').each(function() {
            $(this).height(0);
        });

        $('.service_grid_item').each(function() {
            maxHeight = maxHeight > $(this).prop('scrollHeight') ? maxHeight : $(this).prop('scrollHeight');
        });

        $('.service_grid_item').each(function() {
            $(this).height(maxHeight+40);
        });
         $grid.isotope('layout');
});