
jQuery(document).ready(function($) {
    /* Scroll */
    $(window).scroll(function(){
        if($(this).scrollTop() > 150) {
            $('.edu-header').addClass('scrollnav');
            $('#more-scroll').fadeOut(300);
        }
        else{
            $('.edu-header').removeClass('scrollnav');
            $('#more-scroll').fadeIn(300); 
        }
    });

});