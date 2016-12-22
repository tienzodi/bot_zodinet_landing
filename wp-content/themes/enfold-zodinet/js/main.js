jQuery(function($){
    $('#av_section_1').prepend('<div id="particles-js"></div>');


    particlesJS.load('particles-js', '/wp-content/themes/enfold-zodinet/assets/particles.json', function() {
        console.log('callback - particles.js config loaded');
    });
});