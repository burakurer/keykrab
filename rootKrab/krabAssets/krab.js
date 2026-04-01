$(document).ready(function(){
	$("#rgb").click(function(){
		var check = $(this);
		if (check.is (':checked')){
			$("#card").addClass("box");
		}
		else{
			$("#card").removeClass("box");
		}
	});
	$("#game_name1").keyup(function(){
		var oyunismi = $(this).val();
		$("#game_name").text(oyunismi);
	});
	$("#game_picture1").keyup(function(){
		var oyunresim = $(this).val();
		var resim = $("#game_picture");
		try{
			if($.trim($('#game_picture1').val()).length > 0){
				$(resim).attr("src", oyunresim);
			}
			else{
				$(resim).attr("src", "../krabAssets/images/nogame.png");
			}
		}catch(error){
			console.log(error);
		}
	});
	$("#game_url1").keyup(function(){
		var oyunlinki = $(this).val();
		var link = $("#game_url");
		$(link).attr("href", oyunlinki);
	});
});