var all_post_count = 0;
$(document).ready(function(){
	$(".navigation-section").load('navigation.html');
	$(".side-navigation").load("left_nav_bar.html");
	$(".right-side-navigation").load("right_nav_bar.html");
	$(".story-div").load("story.html");
	$(".status-div").load("status.html");
	$(".loader").hide();

$.ajax({
	type : 'POST',
	url : 'data.php',
	data : {post_update : 1,limit_count : 5,post_count : all_post_count},
	success : function(data){
		const all_data = JSON.parse(data);
		for (var i = 0; i < all_data.length; i++) {
			
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
								                                            <img src= `+all_data[i][1]+` alt='img' class="image-icon rounded-circle" style="width: 40px;height: 40px;">
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
			        					                                <img src = `+all_data[i][1]+` class = "w-100 rounded">
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
			        		                                <div class="d-flex justify-content-center align-items-center controller-div like-div" data-post-id = `+i+`>
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
	        url : 'data.php',
	        data : {post_update : 1,limit_count : 5,post_count : all_post_count},
	        success : function(data){
	        const all_data = JSON.parse(data);
	        	if(all_data.length){
				  $(".loader").hide();
			    }else{
			    	$(".loader").hide();
			    }
		for (var i = 0; i < all_data.length; i++) {

			
		
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
								                            <img src= `+all_data[i][1]+` alt='img' class="image-icon rounded-circle" style="width: 40px;height: 40px;">
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
			        					            <img src = `+all_data[i][1]+` class = "w-100 rounded">
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
			        		       <div class="d-flex justify-content-center align-items-center controller-div like-div" data-post-id = `+(all_post_count-5+i)+`>
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








   

$(document).on("click",".icon-div",function(e){
	$(".icon-div").removeClass("active");
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
		url : 'data.php',
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