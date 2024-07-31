$( document ).ready(
    function(){ 
$( "div.about_menu a" ).each(function(index) {

    $(this).on("click", function(){
        $( "div.about_menu a" ).removeClass("selected");
        $(this).addClass("selected");
        // For the boolean value
        var filterkey = $(this).data('filterkey');
        $( "div.toggable_about").hide();
        $( "div.toggable_about").css({ opacity: 0 });
        $( "div."+filterkey ).show();

        window.dispatchEvent(new Event('resize'));
        var delayInMilliseconds = 200; //1 second

        setTimeout(function() {
            $( "div.toggable_about").css({ opacity: 1 });
         //your code to be executed after 1 second
        }, delayInMilliseconds);
        history.pushState

        var stateObj = { };

        history.pushState(stateObj, filterkey, "?"+filterkey);

    });
});

 var $grid = $('.container_manifesto').isotope({

  itemSelector: '.manifesto_cell',
  percentPosition: true,
  transitionDuration: 0
});


$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});

if (window.location.search) {
    console.log("locserach");

    var loc= window.location.search;
    var hash= window.location.hash;



    
    $( '#btn_'+ loc.split("?")[1] ).trigger( "click" );

  

    setTimeout(function(){
    
        window.location.hash = hash;

    }, 100);
   

       
   

};


});

$(window).on('resize', function () {});

