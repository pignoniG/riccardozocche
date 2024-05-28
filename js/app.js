$( document ).ready(
    function(){ 

 $('button.menu-toggle').click(function(){
  $(".main-navigation").toggleClass("toggled");
  $('button.menu-toggle i').toggle();


});

});



$(window).on('resize', function () {});
