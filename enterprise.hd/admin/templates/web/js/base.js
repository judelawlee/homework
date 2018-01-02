$(document).ready(function(){
	$(".lefttree .bd ul li").click(function(){
		/*if($(this).find(".sub").css("display")=="block"){
			$(this).find(".sub").css("display","none");
		}else{
			$(this).find(".sub").css("display","block");
		}*/
		if($(this).find(".sub").attr("class")=="sub hide"){
			$(this).find(".sub").removeClass("hide");
		}else{
			$(this).find(".sub").addClass("hide");
		}
	});
});