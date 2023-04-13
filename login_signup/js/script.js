$(document).ready(function(e){
	$.ajax({
		type : 'post',
		url : 'jwt.php',
		data : {checkCookie : true},

		success : function(data){

			console.log(data);
			if(data.length === 4){
				window.location.href = "/facebook/views/index.html";
			}



		}
	})
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

$(document).on("click","#create_btn",function(e){
	$(".modal").show();
})

$(document).on("click",".btn-close",function(e){
	$(".modal").hide();
})

$(document).on("click","#sign_up",function(e){
	var first_name = $(".first_name").val().trim();
	var last_name = $(".sur_name").val().trim();
	var email_phn = $(".email_number").val().trim();
	var password = $(".set_password").val().trim();
	var birth_day = $('.birth_day').find(":selected").text();
	var birth_month = $('.birth_month').find(":selected").text();
	var birth_year = $('.birth_year').find(":selected").text();
	var birth_month = birth_day.concat("-",birth_month);
	var dob = birth_month.concat("-",birth_year);
	var gender = "";
	if($('input[name="flexRadioDefault"]:checked').attr("id") == "flexRadioDefault1"){
       gender = "Male";
	}else{
		gender = "Female";
	}

	if($('input[name="flexRadioDefault"]:checked').val() === undefined){
       gender = "Other";
	}
	
	if(first_name != "" && last_name != "" && email_phn != "" && password != ""){

		$.ajax({
			type : 'post',
			url : 'data.php',
			data : {first_name : first_name , last_name : last_name , email_number : email_phn , password : password , dob : dob , gender : gender},
			success : function(data){
                
                $(".modal").hide();
				var first_name = $(".first_name").val("");
				var last_name = $(".sur_name").val("");
				var email_phn = $(".email_number").val("");
				var password = $(".set_password").val("");

			}
	    })

	}else{
		alert("Please fill the empty field");
	}	

})

$(document).on("click",".login-button",function(e){
	var user_name = $(".email-box").val().trim();
	var password = $(".pw-box").val().trim();
	$.ajax({
		type : 'post',
		url : 'jwt.php',
		data : {check_login : true ,user_name : user_name , password : password},

		success : function(data){
			if(data.length === 4){
				window.location.href = "/facebook/views/index.html";
			}
		}
	})

})