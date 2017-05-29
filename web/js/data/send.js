$(function(){
	
	$(".submit").click(function(){
		
		$.post("/data/receive.html",{
			'data': 'haojiangjiang',
		},function(response){
			window.location ="/data/receive.html";
		})

	})
	
})
