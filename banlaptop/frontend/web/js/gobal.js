$(document).ready(function() {
  $("#list-dm").click(function(){
        $("#danhmuc").slideToggle("slow");
    });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
      $('#back-top').fadeIn();
    } else {
      $('#back-top').fadeOut();
    }
  });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});

 
 $('ul.tabs li').click(function(){
  var tab_id = $(this).attr('data-tab');

  $('ul.tabs li').removeClass('current');
  $('.tab-content').removeClass('current');

  $(this).addClass('current');
  $("#"+tab_id).addClass('current');
})
 $('ul.tabs1 li').click(function(){
  var tab_id = $(this).attr('data-tab');

  $('ul.tabs1 li').removeClass('current');
  $('.tab-content').removeClass('current');

  $(this).addClass('current');
  $("#"+tab_id).addClass('current');
})
 var nav = $('#danhmuc');

 $(window).scroll(function () {
  if ($(this).scrollTop() > 125) {
    nav.addClass("f-nav.");
  } else {
    nav.removeClass("f-nav.");
  }
});

var dd = $('.vticker').easyTicker({
    direction: 'up',
    easing: 'easeInOutBack',
    speed: 'slow',
    interval: 1500,
    height: 'auto',
    visible: 7,
    mousePause: 1,
   
  }).data('easyTicker');
 $("#ngaysinh").datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: '1900:' + new Date().getFullYear()
  });
});
