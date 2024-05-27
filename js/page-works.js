
var $grid ;
$( document ).ready(
    function(){ 

$grid = $('.works_grid').masonry({

  itemSelector: '.works_grid_item'
});

$( ".works_filter_button" ).each(function(index) {
    $(this).on("click", function(){
        $( ".works_filter_button" ).removeClass("selected");
        $(this).addClass("selected");
        // For the boolean value
        var filterkey = $(this).data('filterkey');
        
        $("div.works_grid_item").hide();
        $("div."+filterkey).show();
        $('.works_grid').masonry();
     


    });
});



});

$(window).on('resize', function () {});