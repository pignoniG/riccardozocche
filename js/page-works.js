

$( document ).ready(
    function(){ 


$( ".works_filter_button" ).each(function(index) {
    $(this).on("click", function(){
        $( ".works_filter_button" ).removeClass("selected");
        $(this).addClass("selected");
        // For the boolean value
        var filterkey = $(this).data('filterkey');
        
        $("div.works_grid_item").hide();
        $("div."+filterkey).show();
        
     


    });
});



});

$(window).on('resize', function () {});