jQuery(document).ready(function( $ ) {

  $(".toggle-mnu").click(function() {
    $(this).toggleClass("on");
    $(".top-mnu").slideToggle();
    $('body').toggleClass('ohi');
    return false;
  });

  $('body').click(function () {
    if( $(".toggle-mnu").hasClass("on") ){
      $(".toggle-mnu").removeClass("on");
      $(".top-mnu").fadeOut();
      $('body').removeClass('ohi');
    }
  });


  $('#menu-top-mnu a').click(function () {
    $(".toggle-mnu").removeClass("on");
      $(".top-mnu").fadeOut();
      $('body').removeClass('ohi');
  });


  $(".top-mnu").click(function (e) {
    e.stopPropagation();
  });


  /************************************/

$('.wrapper').prepend('<span class="eye-3"></span>');
$('body').addClass('active');


$('.eye-3').click(function (e) {
  e.preventDefault();  
  $('body').toggleClass('active');

});

/************************************/










  /*$('[data-fancybox="gallery"]').fancybox({
    arrows: true,
    infobar: false,
    smallBtn: false,
    toolbar: false,
    iframe : {
      css : {
        width : '950px'
      }
    },    
    slideClass: "myClass",
    baseClass: "myclass"
  });*/


  if($('.posts-slider').length) {
    $('.posts-slider').slick({  
     dots: false,
     infinite: false,
     autoplay: 1000,
     speed: 300,
     slidesToShow: 1,   
   });
  }

 


/*
  infinite: true,
  speed: 300,
  slidesToShow: 10,
  slidesToScroll: 1,
  centerMode: true,
  autoplay: false,
  variableWidth: true,
  autoplaySpeed: 4000,
  cssEase: 'ease-out',
  dots: true
  */



  $('.link').click(function(e) {
    $('.modal-overlay_1').fadeIn();
    e.preventDefault();
    $('body').addClass('ohi');
  });


  $('.pop-close, .modal-overlay').click(function(e) {
    e.preventDefault();
    $('.modal-overlay').fadeOut();
    $('body').removeClass('ohi');
  });




  $('a[href*=\\#]:not([href=\\#])').click(function () {
    elementClick = $(this).attr("href");
    destination = $(elementClick).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination - 0}, 1100);
    return false;
  });


  $(window).scroll(function(){
    var wt = $(window).scrollTop();  
    var wh = $(window).height();    
    if (wt > 600) {
      $('.serv-arr-up').show(400);
    }
    else {
     $('.serv-arr-up').hide();
   }
 });

  if($('select').length) {
    $('select').select2({
      minimumResultsForSearch: -1
    });
  }

}); //ready

