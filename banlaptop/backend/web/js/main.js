$(document).ready(function(){
    $("#imglsp").click(function(event){
      $("#modallsp").modal();
    });
    $('#modallsp').on('hidden.bs.modal', function () {
    	var imgpre=$("#imglsp").val();
    	if(imgpre!="")
    	{
    	$("#anhloaisanpham").attr({
             
    		'src':imgpre,
    		'width':150,
    		'height':100,
    	});
    }
  });
// 
 $("#ImgNews").click(function(event){
      $("#modalnews").modal();
    });
       $('#modalnews').on('hidden.bs.modal', function () {
    	var imgnew=$("#ImgNews").val();
    	if(imgnew!="")
    	{
    	$("#imgviewnews").attr({
             
    		'src':imgnew,
    		'width':150,
    		'height':100,
    	});
    }
  });
       // sanpham
       $("#image").click(function(event){
      $("#modalimagesp").modal();
       });
       $('#modalimagesp').on('hidden.bs.modal', function () {
    	var imgnew1=$("#image").val();
    	if(imgnew1!="")
    	{
    	$("#anhloaisanpham1").attr({
             
    		'src':imgnew1,
    		'width':150,
    		'height':100,
    	});
    }
  });
     // --smallimage
      $("#smallimage").click(function(event){
      $("#modalsmallimage").modal();
    });
      $('#modalsmallimage').on('hidden.bs.modal', function () {
    	var imgnew2=$("#smallimage").val();
    	if(imgnew2!="")
    	{
    	$("#anhloaisanpham2").attr({
             
    		'src':imgnew2,
    		'width':150,
    		'height':100,
    	});
    }
  });
     // --mediumimage
      $("#mediumimage").click(function(event){
      $("#modalmediumimage").modal();
      });
      $('#modalmediumimage').on('hidden.bs.modal', function () {
    	var imgnew3=$("#mediumimage").val();
    	if(imgnew3!="")
    	{
    	$("#anhloaisanpham3").attr({
             
    		'src':imgnew3,
    		'width':150,
    		'height':100,
    	});
    }
  });
      // -lagreimage
      $("#largeimage").click(function(event){
      $("#modallargeimage").modal();
    });
      $('#modallargeimage').on('hidden.bs.modal', function () {
    	var imgnew4=$("#largeimage").val();
    	if(imgnew4!="")
    	{
    	$("#anhloaisanpham4").attr({
             
    		'src':imgnew4,
    		'width':150,
    		'height':100,
    	});
    }
  });
});