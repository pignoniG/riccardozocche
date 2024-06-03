$( document ).ready(
    function(){ 

 var $grid =$('.home_grid').isotope({

  itemSelector: '.home_grid_item',
  percentPosition: true,
  transitionDuration: 0,

});



$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});


});

$(window).on('resize', function () {});