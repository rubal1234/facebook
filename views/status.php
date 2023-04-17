<?php 

session_start();

?>

<div class="container">
	<div class="row">
		<div class="col d-flex justify-content-xl-center">
			<div class="status-modal box" tabindex="-1">
			  <div class="">
			    <div class="border-0">
			      <div class="modal-header d-block pb-0">
			        <div class="row">
			        	<div class="col-12 tab">
			        		<div  class="mt-2 mb-2">
							  	<div class="d-flex align-items-center">
						           <img src='<?php echo $_SESSION["image-path"] ?>' alt='img' class="image-icon rounded-circle" style="width: 40px;height: 40px;">
						           <input type="text" name="" class="form-control w-100 ms-3 rounded-pill" placeholder="What's on your mind, Er?" id = "post-status-div" readonly="readonly" style="background-color: transparent;cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal">
						        </div>
						        
						    </div>
			        	</div>
			        </div>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	
			        	<div class="col-6 col-sm-4" onclick="changeContent(this);" style="cursor: pointer;">
			        		<div class="d-flex justify-content-center align-items-center">
			        			<img src="../images/video-camera.png" style="width: 30px">
			        			<span class="ps-2">Live video</span>
			        		</div>
			        	</div>
			        	<div class="col-6 col-sm-4" style = "cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeContent(this);">
			        		<div class="d-flex justify-content-center align-items-center">
			        			<img src="../images/picture.png" style="width: 30px">
			        			<span class="ps-2">Photo/video</span>
			        		</div>
			        	</div>
			        	<div class="col-6 col-sm-4 d-none d-sm-block" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="changeContent(this);">
			        		<div class="d-flex justify-content-center align-items-center">
			        			<img src="../images/star.png" style="width: 30px">
			        			<span class="ps-2">Feeling/activity</span>
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
</div>


<!-- Modal -->
<form action="../controller/upload.php" method="post" enctype="multipart/form-data"  id="myFile">
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<div class="w-100 text-center">
	      		<h5 class="modal-title post-title" id="exampleModalLabel">Create Post</h5>
	      	</div>
	        
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="d-flex align-items-center">
			    <img src='<?php echo $_SESSION["image-path"]?>' alt='img' class="image-icon rounded-circle user-img" style="width: 40px;height: 40px;">
		        <div class="text-start ps-4">
		        	<span class="pt-1 user-name"><?php echo $_SESSION['name'] ?></span>
		        	    <div class="dropdown">
							<button class="btn dropdown-toggle visiblity-option" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f1f1f1;">
							    Public
							  </button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
							    <li class="d-flex align-items-center"><i class="ps-2 fa-solid fa-earth-americas"></i><a class="dropdown-item ps-1" href="#">Public</a></li>
							    <li class="d-flex align-items-center"><i class="ps-2 fa-solid fa-user-group"></i><a class="dropdown-item ps-1" href="#">Friends</a></li>
							    <li class="d-flex align-items-center"><i class="ps-2 fa-solid fa-lock"></i><a class="dropdown-item ps-1" href="#">Only me</a></li>
							</ul>
						</div>
		        </div>
			</div>
			<textarea class="form-control mt-3 post-text" style="height: 150px;"  placeholder="What's on your mind, Er?" name="caption"></textarea>

			<div class="p-4 border mt-3 rounded w-100">
				<div class="row">
					<div class="col-6">
						Add to your post
					</div>
					<div class="col-6 text-end">
						<label style="cursor: pointer"><img src="../images/picture.png" style="width: 30px">
						<input type="file" class="d-none uploaded-image" name="file" accept="image/*" id="myFile"></label>
					</div>
				</div>
			</div>
	       </div>
	      <div class="modal-footer">
	        <input type="submit" class="btn btn-primary w-100 post-btn disabled" value = "Post">
	      </div>
	    </div>
	  </div>
	</div>
</form>
