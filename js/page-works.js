

$( document ).ready(
    function(){ 


var $grid = $('.works_grid').isotope({

  itemSelector: '.works_grid_item',
  transitionDuration: 0
});

$( ".works_filter_button" ).each(function(index) {
    $(this).on("click", function(){
        $( ".works_filter_button" ).removeClass("selected");
        $(this).addClass("selected");
        // For the boolean value
        var filterkey = $(this).data('filterkey');
        $grid.isotope({ filter: "."+filterkey })
        

        
     


    });
});



});

$(window).on('resize', function () {});