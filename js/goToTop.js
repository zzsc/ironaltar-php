$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        
        $('#buttonTop').fadeIn(200);    
    } else {
        $('#buttonTop').fadeOut(200);   
    }
});
$('#buttonTop').click(function() {      
    $('body,html').animate({
        scrollTop : 0                       
    }, 500);
});