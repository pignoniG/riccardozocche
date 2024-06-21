$( document ).ready(
    function(){ 

 $('button.menu-toggle').click(function(){
  $(".main-navigation").toggleClass("toggled");
  $('button.menu-toggle i').toggle();


});
 $(document).foundation();

});



$( document ).on( 'click', ".close-button", function () {

    $('.is-reveal-open').removeClass('is-reveal-open');

} );


$(window).on('resize', function () {});
