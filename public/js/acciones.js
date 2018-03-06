

$(function(){
     new WOW().init();
    $('.hamburger').click(function(){
        desplegar();
    });
    $('.desplegar').click(function(){
        desplegar();
    });
    $('#cerrar').click(function(){     
        $('#rigth-menu').removeClass('slideInRight').addClass('slideOutRight');    
    });
    
    $( "body" ).on('swipeleft', function(){
        desplegar();
    });

    
    //$(".art").height(height);
    //console.log(height);
   
});

function desplegar(){
    if($('#rigth-menu').hasClass('slideOutRight')){
        $('#rigth-menu').removeClass('slideOutRight');
    }
    $('#rigth-menu').show().addClass('slideInRight');    
}

$( window ).on( "swipeleft", function( event ) {
    desplegar();
});

$( window ).on( "swiperight", function( event ) {
    $('#rigth-menu').removeClass('slideInRight').addClass('slideOutRight'); 
});