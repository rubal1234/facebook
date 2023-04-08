$(document).on("click",".login-button",function(e){
	$(".loading").show();
	$(".login-button").addClass("disabled");
	window.location.href = "http://localhost/facebook";
})
for(var i = 2023;i>=1905;i--){
  $('.mySelect').append($('<option>', {
    text: i
  }));	
}


$(document).on("click",".btn-send",function(e){
	// alert("An Otp has been sent to your Email addess");
	// window.location.href = "http://localhost/facebook/login_signup";
	$.ajax({
		type : "POST",
		url : 'otp.php',
		success : function(data){
			console.log("hello");
		}
	})
})
