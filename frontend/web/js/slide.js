$(document).ready(function() {
   $(".slideanh").owlCarousel({ 
     autoPlay:true,
      items:1,
      loop:true,
      slideSpeed: 300,
      transitionStyle:"fadeUp"
    });

   $(".catogory").owlCarousel({ 

     autoPlay:true,
      items:5,
      loop:true,
      slideSpeed: 300,
       navigation: true,
        navigationText:["&lsaquo; ","&rsaquo; "],    
      });
   
   $("#anh").owlCarousel({ 
     autoPlay:true,
      items:2,
      loop:true,
      pagination:false,
      navigation : true,
    navigationText :["<",">"]
    });
   
    });
