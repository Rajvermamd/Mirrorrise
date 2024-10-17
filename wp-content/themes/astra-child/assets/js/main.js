

$(document).ready(function(){    

    // Show the button when scrolling down
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { // Show button after scrolling 100px
            $('#scroll-top').fadeIn();
        } else {
            $('#scroll-top').fadeOut();
        }
    });

    // Smooth scrolling to the top when button is clicked
    $('#scroll-top').click(function() {
        $('html, body').animate({scrollTop: 0}, 800); // 800ms for smooth scroll
        return false;
    });


    /* ======== Fixed Scroll =========*/
    window.onscroll = function() {
        var reveals = document.querySelectorAll('.reveal');
        for(var i = 0; i < reveals.length; i++){

            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;

            if(revealtop < windowheight - revealpoint){
                reveals[i].classList.add('active');
            }
            else{
                reveals[i].classList.remove('active');
            }
        }


        var scroll = $(window).scrollTop();
        if(scroll > 500){
            $('body').addClass('fixed-header')
        }else{
            $('body').removeClass('fixed-header')
            
        }
        
    };


    /*========== Counter ============*/

    $('.shared-success').mouseenter(function(){
        const counters = document.querySelectorAll('.value');
        const speed = 400;

        counters.forEach( counter => {
        const animate = () => {
            const value = +counter.getAttribute('counter');
            const data = +counter.innerText;
            
            const time = value / speed;

            if(data < value) {
                counter.innerText = Math.ceil(data + time);
                console.log(counter.innerText)
                setTimeout(animate, 1);
            }else{
                counter.innerText = value;
            }
        }

        animate();
        });
    });

    // =========== CARD CAROWSEL =========
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })


    // ================ MODAL ============
    $('#get-in-touch-btn').on('click',function(){
        $('#get-in-touch-popup').modal('show')
    })

    $('.close').on('click',function(){
        $('#get-in-touch-popup').modal('hide')
    })

   

   
    
      
      
    
    

})