//this function is used to show the menu bar while cicking on the toggle 
$(document).ready(function(){
	//alert(); use for test
	$(".menu1 a i").click(function(){
		$(".sidebar1").slideToggle('fast');
	});

	window.onresize = function(event) {
		if($(window).width() > 420) {
			$(".sidebar1").show();
		}
	}
});