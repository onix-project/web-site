var div = $("#ul-oculto");

$(function(){
	$('.roadmap-movil').owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:false
          },
          600:{
              items:1,
              nav:false
          },
          1000:{
              items:1,
              nav:false,
              loop:false
          }
      }
  });
	$(".btn-movil").click(function(){
		$("#modal-core-vista").modal("show");
		var id = $(this).attr('id');
		$("#" + id + "-movil").css("display", 'block');
		$(".modal-movil").each(function(x, y){
			if($(y).attr("id") !== id + "-movil"){
				$(y).css('display', 'none');
			}
		})
		
	});
	$(".btn-click").click(function(){
		var click = $(this).attr('ident');
		$(".active").each(function(x, y){
			if($(y).attr('ident') != click){
				$(y).removeClass('active');
			}
		});
	});
});