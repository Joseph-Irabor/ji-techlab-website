

$(document).ready(function () {

    // DROPDWON MENU ANIMATION
    $('.services-btn').mouseover(function () { 
        
        $('.drpdwn-list-container').slideDown(200);
        
      });

      $('.drpdwn-list-container').mouseleave(function () { 
        $('.drpdwn-list-container').slideUp(200);
      });

    //   BANNER ANIMATION

    $('.cta-head').hide();
    $('.cta-text').hide();

    $('.cta-head').slideDown(1000);
    $('.cta-text').fadeIn(2500);


});