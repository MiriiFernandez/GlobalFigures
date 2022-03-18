/* Mostrar login form al boton */
$('.LoginBtn').click(function(){
    $('.LogIn').show();
    $('.iniciaSesion').hide();
    /* borde bottom cuando click*/
    $('.LoginBtn').css({'border-bottom' : '2px solid #ff4141'});
    /* Eliminar borde bottom despues del click */
    $('.registrarseBtn').css({'border-style' : 'none'});
});

/* Mostrar registrare from al click */
$('.registrarseBtn').click(function(){
    $('.LogIn').hide();
    $('.iniciaSesion').show();
    /* borde bottom cuando click*/
    $('.registrarseBtn').css({'border-bottom' : '2px solid #ff4141'});
    /* Eliminar borde bottom despues del click */
    $('.LoginBtn').css({'border-style' : 'none'});
});

/*LOADER PAGINA JS */
window.onload = function() {
    $('#loader').fadeOut();
    $('body').removeClass('hidden')
}

