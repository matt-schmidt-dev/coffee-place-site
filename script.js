
//Parallax Header-Section
$(window).scroll(function() {
  parallax();
});

function parallax() {

  var wScroll = $(window).scrollTop();

  $('.parallax--bg').css('background-position', 'center '+(wScroll*0.75)+'px');
  $('.parallax--test').css('background-position', 'center '+(wScroll*0.5)+'px');

}


//Smooth Scrolling Links
$(document).ready(function() {

  $('.scroll').click(function(e){
    e.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000 );
});
});

$(document).ready(function(){
  $('.nav-item').click(function(){
    $('.nav-item').removeClass("active");
    $(this).addClass("active");

  });
});


//Burger Menu Toggling
document.querySelector('.burger').addEventListener('click', () => {
document.querySelector('.nav-ul-list').classList.toggle('nav-active');
	});

document.querySelector('.burger').addEventListener('click', () => {
document.querySelector('.burger-exit').classList.toggle('active-exit-burger');
  	});


    $(document).ready(function(){
      $('.burger-exit').click(function(){
        $('.nav-ul-list').removeClass('nav-active');
        $('.burger-exit').removeClass('active-exit-burger');
      });
    });


    $(document).ready(function(){
      $('.ind-nav-link').click(function(){
        $('.nav-ul-list').removeClass('nav-active');
        $('.burger-exit').removeClass('active-exit-burger');
      });
    });



//Scroll Animation for Navigation
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('#nav-container-box').addClass('nav-bg-scroll');
    $('.ind-nav-link').addClass('nav-text-scroll');
    $('.logo-image').addClass('logo-image-scroll');
    $('.burger div').addClass('burger-scroll');
    $('.ind-nav-link').addClass('ind-nav-link-scroll');
  }
  else {
    $('#nav-container-box').removeClass('nav-bg-scroll');
    $('.ind-nav-link').removeClass('nav-text-scroll');
    $('.logo-image').removeClass('logo-image-scroll');
    $('.burger div').removeClass('burger-scroll');
    $('.ind-nav-link').removeClass('ind-nav-link-scroll');
  }
});


//Scroll Animation for Services Section
$(window).scroll(function() {
  if ($(document).scrollTop() > 300) {
    $('.s1-img, .s2-img, .s3-img').addClass('s123-scroll');
  }
  /*else {
    $('.s1-des, .s1-img').removeClass('s123-scroll');
  }*/
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 500) {
    $('.s1-des, .s2-des, .s3-des').addClass('s123-scroll');
  }
});


//Testimonial Carousel
  $('.single-item').slick({
    speed: 500,
	  autoplay: true,
    autoplaySpeed: 3500,
    arrows: false,
    dots: true,
  });
  
  
//Make Contact Reserve Form Responsive
$(document).ready(function(){
            if (jQuery(document).width() < 701) {
               jQuery('.name-rf').attr('size','30');
               jQuery('.email-rf').attr('size','30');
               jQuery('.message-rf').attr('cols','30');
            }
            else{
                jQuery('.name-rf').attr('size','50');
                jQuery('.email-rf').attr('size','50');
                jQuery('.message-rf').attr('cols','51');
            };
});

jQuery(window).on('resize', function() {
            if (jQuery(document).width() < 701) {
               jQuery('.name-rf').attr('size','30');
               jQuery('.email-rf').attr('size','30');
               jQuery('.message-rf').attr('cols','30');
            }
            else{
                jQuery('.name-rf').attr('size','50');
                jQuery('.email-rf').attr('size','50');
                jQuery('.message-rf').attr('cols','51');
            };
});


//Contact From submit
var form = document.getElementById('con-form-sub');
form.onsubmit = function() {
  console.log(form.fullName);
};
