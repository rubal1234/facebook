var all_post_count = 0;
$(document).ready(function(){
	$(".navigation-section").load('views/navigation.html');
	$(".side-navigation").load("views/left_nav_bar.html");
	$(".right-side-navigation").load("views/right_nav_bar.html");
	$(".story-div").load("views/story.html");
	$(".status-div").load("views/status.html");
	$(".loader").hide();

$.ajax({
	type : 'POST',
	url : 'modal/data.php',
	data : {get_story : true},
	success : function(data){
		const all_data = JSON.parse(data);

		for(var i = 0; i< all_data.length ; i++){

			var html = `
		            <div class="card-module active-story">

			        			<div class="card story h-100">
								  <img src= `+all_data[i][1]+` class="h-100" alt="Avatar" style="width:100%">
								   <div class="container profile-account position-absolute">
									    <img src = `+all_data[i][1]+` alt='img' class="image-icon rounded-circle" style="width:43px;height : 45px;">
									  </div>
								  <div class="container story-content position-absolute">
								 
								    <p class="story-profile-text mt-2 text-primary">`+all_data[i][0]+`</p> 
								  </div>
								</div>
			        	
			        </div>
			    `;
	        $(".story-module").append(html);
		}
	}
})

$.ajax({
	type : 'POST',
	url : 'modal/data.php',
	data : {get_reels : true},
	success : function(data){
		const all_data = JSON.parse(data);

		for(var i = 0; i< all_data.length ; i++){

			var html = `
		            <div class="card-module">

			            <div class="card story h-100">
							<video class = "h-100" controls>
								<source src=`+all_data[i][0]+` type="video/mp4">
								Your browser does not support the video tag.	  
							</video> 	  
					    </div>
			        </div>
			    `;
	        $(".reel-module").append(html);
		}
	}
})

$.ajax({
	type : 'POST',
	url : 'modal/data.php',
	data : {post_update : 1,limit_count : 5,post_count : all_post_count},
	success : function(data){
		const all_data = JSON.parse(data);
		for (var i = 0; i < all_data.length; i++) {
			var image_path = all_data[i][1];
			var image_name = image_path.split('/');
			if(image_name[1].length != 0){
				image_path = all_data[i][1];
			}else{
				image_path = "user-images/default.png";
			}
			var html = `<div class="container item" id="template">
	                        <div class="row">
		                        <div class="col d-flex justify-content-xl-center">
			                        <div class="status-modal post-modal box" tabindex="-1">
			                            <div class="">
			                                <div class="border-0">
			                                    <div class="modal-header d-block pb-0">
			                                        <div class="row">
			        	                                <div class="col-12 tab">
			        		                                <div  class="mt-2 mb-2">
			        			                                <div class="row">
			        				                                <div class="col-6">
			        					                                <div class="d-flex align-items-center">
								                                            <img src= `+image_path+` alt='img' class="image-icon rounded-circle" style="width: 40px;height: 40px;">
								                                            <div class="ps-3 text-start">
								          	                                    <span>`+all_data[i][2]+`</span><br>
								          	                                    <span class="time-span">1 h</span>
								          	                                    <img src="images/world.png" style="width: 12px;" class="ms-1">
								                                            </div>   
								                                        </div>
			        				                                </div>
			        				                                <div class="col-6">
			        					                                <div class="text-end">
			        						                                <i class="fa-solid fa-ellipsis px-3" style="font-size: 20px;vertical-align: middle;"></i>
			        						                                <img src="images/cross.png" alt='img' class="image-icon cross-btn" style="width: 20px;height: 20px;">
			        					                                </div>
			        				                                </div>
			        			                                </div> 
			        			                                <div class="row">
			        				                                <div class="col-8 col-sm-6 text-start mt-3">
			        					                                <span class="caption-text">`+all_data[i][3]+`</span>
			        				                                </div>
			        			                                </div>
			        			                                <div class="row">
			        				                                <div class="col">
			        					                                <img src = `+image_path+` class = "w-100 rounded">
			        				                                </div>
			        			                                </div>
			        			                                <div class="row">
			        				                                <div class="col text-start mt-2 liked-people">
			        					                                <img src="images/like.png" style="width: 16px;">
			        					                                <span class="ps-2 caption-text liked-text">`+all_data[i][4]+` People liked this</span>
			        				                                </div>
			        				                                <div class = "col text-end mt-2 comment-count-section">
			        				                                    <span class = "caption-text">1 People Commented</span>
			        				                                </div>
			        			                                </div>
						                                    </div>
			        	                                </div>
			                                        </div>
			                                    </div>
			                                    <div class="modal-body">
			                                        <div class="row">     	
			                                            <div class="col-6 col-sm-4">
			        		                                <div class="d-flex justify-content-center align-items-center controller-div like-div" data-post-id = `+all_data[i][5]+`>
			        			                                <i class="fa-solid fa-thumbs-up" style="font-size: 20px"></i>
			        			                                <span class="ps-2">Like</span>
			        		                                </div>
			        	                                </div>
			        	                                <div class="col-6 col-sm-4">
			        		                                <div class="d-flex justify-content-center align-items-center controller-div comment-div">
			        			                                <img src="images/comment.png" style="width: 20px">
			        			                                <span class="ps-2">Comment</span>
			        		                                </div>
			        	                                </div>
			        	                                <div class="col-6 col-sm-4 d-none d-sm-block">
			        		                                <div class="d-flex justify-content-center align-items-center controller-div share-div">
			        			                                <img src="images/share.png" style="width: 20px">
			        			                                <span class="ps-2">Share</span>
			        		                                </div>
			        	                                </div>
			                                        </div>
			                                    </div>
			                                    <div class = "modal-footer d-block">
			                                        <div class = "row">
                                                        <div class = "col">
                                                           <div class = "text-start">
		                                                      <a class = "more_comment_txt">View more comments</a>
					                                        </div>
                                                        </div>
			                                        </div>
			                                        <div class = "row comment-row">
									                    
									                </div>
                                                    <div class = "row">
                                                         <div class = "col-1">
                                                           <div class = "user-comment-div">
                                                                <img src= `+image_path+` alt='img' class="image-icon rounded-circle" style="width: 35px;height: 35px;">
                                                           </div>
                                                         </div>
                                                         <div class = "col">
                                                             <input class = "form-control w-100 rounded-pill user-comment" placeholder = "Write a comment..."/>
                                                         </div>
                                                    </div>
			                                    </div>
			                                </div>
			                            </div>
			                        <div>
		                        </div>
	                        </div>
	                    </div>
	                </div>
                </div>`;
    $(".post-div").append(html);
    
	}



	//Displaying divs randomly

	$(".post-div").html($(".post-div #template").sort(function(){
       return Math.random()-0.5;
    }));


    $(".item").each(function(e){
    	var liked_text = $(this).find(".liked-text").text();
    	var word_count = liked_text.split(" ");
    	let liked_count = word_count[0];
    	if(liked_count !== ""){
    		$(this).find(".liked-people").show();
    		$(this).find(".like-div").css({
    			color : '#1e82ff'
    		})
    	}else{
    		$(this).find(".liked-people").hide();
    	}
    })

	}

})
all_post_count = all_post_count + 5;

})

function onScroll(){

	    $(".loader").show();

   	    $.ajax({
   	        type : 'POST',
	        url : 'modal/data.php',
	        data : {post_update : 1,limit_count : 5,post_count : all_post_count},
	        success : function(data){
	        const all_data = JSON.parse(data);
	        	if(all_data.length){
				  $(".loader").hide();
			    }else{
			    	$(".loader").hide();
			    }
		for (var i = 0; i < all_data.length; i++) {	
		    var image_path = all_data[i][1];
			var image_name = image_path.split('/');
			if(image_name[1].length != 0){
				image_path = all_data[i][1];
			}else{
				image_path = "user-images/default.png";
			}
			var html = `<div class="container item" id="template">
	        <div class="row">
		        <div class="col d-flex justify-content-xl-center">
			        <div class="status-modal post-modal box" tabindex="-1">
			            <div class="">
			                <div class="border-0">
			                    <div class="modal-header d-block pb-0">
			                        <div class="row">
			        	                <div class="col-12 tab">
			        		                <div  class="mt-2 mb-2">
			        			                <div class="row">
			        				                <div class="col-6">
			        					                <div class="d-flex align-items-center">
								                            <img src= `+image_path+` alt='img' class="image-icon rounded-circle" style="width: 40px;height: 40px;">
								                                <div class="ps-3 text-start">
								          	                        <span>`+all_data[i][2]+`</span><br>
								          	                        <span class="time-span">1 h</span>
								          	                        <img src="images/world.png" style="width: 12px;" class="ms-1">
								                                </div>   
								                        </div>
			        				                </div>
			        				                <div class="col-6">
			        					                <div class="text-end">
			        						                <i class="fa-solid fa-ellipsis px-3" style="font-size: 20px;vertical-align: middle;"></i>
			        						                <img src="images/cross.png" alt='img' class="image-icon cross-btn" style="width: 20px;height: 20px;">
			        					                </div>
			        				                </div>
			        			                </div> 
			        			            <div class="row">
			        				            <div class="col-8 col-sm-6 text-start mt-3">
			        					            <span class="caption-text">`+all_data[i][3]+`</span>
			        				            </div>
			        			            </div>
			        			           <div class="row">
			        				           <div class="col">
			        					            <img src = `+image_path+` class = "w-100 rounded">
			        				            </div>
			        			            </div>
			        			            <div class="row">
			        				            <div class="col text-start mt-2 liked-people">
			        					           <img src="images/like.png" style="width: 16px;">
			        					           <span class="ps-2 caption-text liked-text">`+all_data[i][4]+` People liked this</span>
			        				            </div>
			        			            </div>
						                </div>
			        	            </div>
			                    </div>
			                </div>
			            <div class="modal-body">
			                <div class="row">     	
			                   <div class="col-6 col-sm-4">
			        		       <div class="d-flex justify-content-center align-items-center controller-div like-div" data-post-id = `+all_data[i][5]+`>
			        			        <i class="fa-solid fa-thumbs-up" style="font-size: 20px"></i>
			        			        <span class="ps-2">Like</span>
			        		        </div>
			        	        </div>
			        	        <div class="col-6 col-sm-4">
			        		        <div class="d-flex justify-content-center align-items-center controller-div comment-div">
			        			       <img src="images/comment.png" style="width: 20px">
			        			       <span class="ps-2">Comment</span>
			        		        </div>
			        	        </div>
			        	        <div class="col-6 col-sm-4 d-none d-sm-block">
			        		        <div class="d-flex justify-content-center align-items-center controller-div share-div">
			        			        <img src="images/share.png" style="width: 20px">
			        			        <span class="ps-2">Share</span>
			        		        </div>
			        	        </div>
			                </div>
			            </div>
			            <div class = "modal-footer d-block">
			                <div class = "row">
                                <div class = "col">
                                    <div class = "text-start">
		                                <a class = "more_comment_txt">View more comments</a>
					                </div>
                                </div>
			                </div>
			                <div class = "row comment-row">
			                    
			                </div>
                            <div class = "row">
                                <div class = "col-1">
                                    <div class = "user-comment-div">
                                        <img src= `+image_path+` alt='img' class="image-icon rounded-circle" style="width: 35px;height: 35px;">
                                    </div>
                                </div>
                                <div class = "col">
                                    <input class = "form-control w-100 user-comment rounded-pill" placeholder = "Write a comment..."/>
                                </div>
                            </div>                      
			            </div>
			        </div>
			    </div>
			 <div>
		</div>
	            </div>
	            </div>
	            </div>
                </div>`;
                $(".post-div").append(html);
	        }


            $(".item").each(function(e){
    	var liked_text = $(this).find(".liked-text").text();
    	var word_count = liked_text.split(" ");
    	let liked_count = word_count[0];
    	if(liked_count !== ""){
    		$(this).find(".liked-people").show();
    		$(this).find(".like-div").css({
    			color : '#1e82ff'
    		})
    	}else{
    		$(this).find(".liked-people").hide();
    	}})
        }

    })
   all_post_count = all_post_count + 5;
}

var bottomReached = false;

$(window).on('scroll', function() {
  if(!bottomReached && $(window).scrollTop() >= $('.post-div').offset().top + $('.post-div').outerHeight() - window.innerHeight) {
    bottomReached = true;
    onScroll();
    console.log('Reached the bottom of the page!');
  } else if(bottomReached && $(window).scrollTop() < $('.post-div').offset().top + $('.post-div').outerHeight() - window.innerHeight) {
    bottomReached = false;
    console.log('Left the bottom of the page');
  }
});








   

$(document).on("click","#icon-div",function(e){
	$(".social-icon").removeClass("active");
	$(this).addClass("active");
})

$(document).on("click",".tab-div",function(e){
	$(".story-reel-div").removeClass("active");
	$(this).addClass("active");
})

$(document).on("click",".cross-btn",function(e){
	$(this).closest("#template").remove();
})

$(document).on("click",".like-div",function(e){
	var like_count = $(this).closest('#template').find(".liked-text");
	var word_count = like_count.text();
    let liked_count = word_count.split(" ");
	var post_id = $(this).closest('#template').find(".like-div").data('post-id');
	$(this).closest('#template').find(".liked-people").show();
	var count = parseInt(liked_count[0]) + 1;
	if(isNaN(count)){
		count = 1;
	}
	console.log(count);
	like_count.text(count + "  People liked this");
	$(this).css({
		color : '#1e82ff'
	})

	$.ajax({
		type : 'POST',
		url : 'modal/data.php',
		data : {like_update : 1,data_post_id : post_id,count : count},
		success : function(data){
			console.log("hello");
		}

	})
	
})


$(document).on("click",".dropdown-menu li a",function(e){
	var selected_text = $(this).text();
	$(".visiblity-option").html(selected_text);
})



$(document).on("change keyup paste",".post-text",function(e){
	var pos_text = $(".post-text").val();
	if(pos_text.length == 0){
       $(".post-btn").addClass("disabled");
	}else{
	   $(".post-btn").removeClass("disabled");
	}
	
})


function changeContent(e){
	 var text = $(e).children().find("span").text();
	 // alert(text);
	 if(text.startsWith('P')){
	 	$(".post-title").text("Upload Photo or Video");
	 }else if(text.startsWith('F')){
	 	$(".post-title").text("How are you feeling?");
	 }else{
	 	alert("This option has not any function now");
	 }
}

$(document).on("click","#post-status-div",function(e){
	$(this).find(".modal-title").text("");
	$(this).find(".modal-title").text("Create a Post");
})

var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
};

$(document).on("change",".story-reel-btn",function(e){
	$(".story-btn").removeClass("disabled");
	$(".image-div").show();
})

$(document).on("click",".active-story",function(e){
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	$('#myModal').show();
	modalImg.src = $(this).children().children().find("img").attr("src");
})

$(document).on("click",".img-close",function(e){
	$('#myModal').hide();
})

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active1", "");
  }
  document.getElementById(cityName).style.display = "block";
  // evt.currentTarget.className += " active";
}

$(document).on('keyup',".user-comment",function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
    	var text = $(this).val();
    	$(this).parent().parent().prev().css({
    		'height' : '42px',
    	});
    	var html = `
    	<div class = "comment-module">
	        <div class = "col-1">
	            <div class = "comment-div">
					<img class="image-icon rounded-circle" style="width: 35px;height: 35px;">
			    </div>
			</div>
			<div class = "col-6 comment-section"></div>
		</div>`;
        $(this).parent().parent().prev().append(html);
        $(this).parent().parent().prev().children().css({
    		'display' : 'flex',
    		'align-items' : 'center',
    	});
    	var img  = $(this).parent().prev().children().children().attr("src");
        $(this).parent().parent().prev().children().children().children().children().attr("src",img);
        $(this).parent().parent().prev().children().children().next().text(text);

        var row_id = $(this).parent().parent().parent().prev().children().children().children().attr("data-post-id");

        $.ajax({
	    	type : 'post',
	    	url : 'modal/data.php',
	    	data : {setComment : true,id : row_id,commentText : text},
	    	success : function(data){
	          console.log("hello");
	    	}
        })

        var text = $(this).val("");
    }
                
});









