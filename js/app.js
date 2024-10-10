$( document ).ready(
    function(){ 

var cc = 0;
    $(".footer_containers.left > *").each(function(){
        cc += $(this).outerHeight(true);
    });
 $(".footer_containers.left").css("padding-top", 100-cc);
 $("#bottom_logo").css("margin-top", -100+cc);
var cc = 0;
    $(".footer_containers.right > *").each(function(){
        cc += $(this).outerHeight(true);
    });
 $(".footer_containers.right").css("padding-top", 100-cc);
 
 $('button.menu-toggle').click(function(){
  $(".main-navigation").toggleClass("toggled");
  $('button.menu-toggle i').toggle();






});
 $(document).foundation();

});



$( document ).on( 'click', ".close-button", function () {

    $('.is-reveal-open').removeClass('is-reveal-open');

} );


$(window).on('resize', function () {



    var cc = 0;
    $(".footer_containers.left > *").each(function(){
        cc += $(this).outerHeight(true);
    });
 $(".footer_containers.left").css("padding-top", 100-cc);
 $("#bottom_logo").css("margin-top", -100+cc);
var cc = 0;
    $(".footer_containers.right > *").each(function(){
        cc += $(this).outerHeight(true);
    });
 $(".footer_containers.right").css("padding-top", 100-cc);



});
