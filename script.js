
$(document).ready(function(){
    $(window).scroll(function(){
  if(this.scrollY > 20){
    $('.navbar').addClass("sticky");
  }
  else{
    $('.navbar').removeClass("sticky");
  }
  // if(this.scroll > 500){
  //   $('.scroll-up-btn').addClass("show");
  // }
  // else{
  //   $('.scroll-up-btn').removeClass("show");
  // }
    });


    // slide-up script

    // $('.scroll-up-btn').click(function(){
    //   $('html').animate({scrollTop: 0});

    // });


    // toggle menu/navbar

    $('.menu-btn').click(function(){
      $('.navbar .menu').toggleClass("active");
      $('.menu-btn i').toggleClass("active");
    });


      $('.team-slider').owlCarousel({
        loop: true,            
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 450,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            },
            1200: {
                items: 4
            },
            1920: {
                items: 5
            }
        }
    });


});




const button = document.querySelector('.scroll1');

const displayButton = () => {
  window.addEventListener('scroll', () => {
    console.log(window.scrollY);
  
    if (window.scrollY > 100) {
      button.style.display = "block";
    } else {
      button.style.display = "none";
    }
  });
};

const scrollToTop = () => {
  button.addEventListener("click", () => {
    window.scroll({
      top: 0,
      left: 0,
      behavior: 'smooth'
    }); 
    console.log(event);
  });
};

displayButton();
scrollToTop();



// $(document).ready(function(){
//   $(".multiple-text").autoPlay(function(){
//     String: ['A Frontend Developer', 'A Programmer', 'A Website Designer','A Freelancer'];
//    loop : true
//   });
// });