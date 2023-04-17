<?php 

session_start();

?>

<div class="sidenav d-none d-xl-block">


	<div class="side-menu">

			<a class="d-flex align-items-center">
		  	    <div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
	                <img src= '<?php echo $_SESSION["image-path"]?>' alt='img' class="image-icon w-100 rounded-circle">
	            </div>
	            <span class="ps-2 pt-1 user-name"><?php echo $_SESSION['name']  ?></span>
		    </a>
		    <a  class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
		            <img src="../images/friends.png" alt='img' class="image-icon w-100">
		        </div>
		        <span class="ps-2 pt-1">Friends</span>
		    </a>
			<a  class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
			            <img src="../images/facebook-page.png" alt='img' class="image-icon w-100">
			    </div>
			    <span class="ps-2 pt-1">Pages</span>
			</a>
			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/most-recent.png" alt='img' class="image-icon w-100">
				</div>
				<span class="ps-2 pt-1">Most recent</span>
			</a>
			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/users.png" alt='img' class="image-icon w-100">
				</div>
				<span class="ps-2 pt-1">Groups</span>
			</a>
			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/marketplace.png" alt='img' class="image-icon w-100">
				</div>
				<span class="ps-2 pt-1">Marketplace</span>
			</a>
			<a class="d-flex align-items-center">
				<div class="image-icon-div side-icon-div d-flex align-items-center justify-content-center mt-1">
						
				    <i class="fa-solid fa-chevron-down"></i>
			    </div>
			    <span class="ps-2 pt-1">See more</span>
			</a>
			
		</div>

		<div class="side-shortcuts">
			<div class="mt-2 mx-2">
				<span class="ps-2 pt-1">Your shortcuts</span>
			</div>

			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/ludo.png" alt='img' class="image-icon w-100 rounded">
				</div>
				<span class="ps-2 pt-1">Ludo</span>
			</a>

			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/uk.jfif" alt='img' class="image-icon w-100 rounded">
				</div>
				<span class="ps-2 pt-1">Neaplese in UK</span>
			</a>

			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/omg.png" alt='img' class="image-icon w-100 rounded">
				</div>
				<span class="ps-2 pt-1">OMG</span>
			</a>
			
			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/quiz.png" alt='img' class="image-icon w-100 rounded">
				</div>
				<span class="ps-2 pt-1">Quiz Planet</span>
			</a>

			<a class="d-flex align-items-center">
			  	<div class="side-icon-div d-flex align-items-center justify-content-center mt-1">
				    <img src="../images/basketball.jfif" alt='img' class="image-icon w-100 rounded">
				</div>
				<span class="ps-2 pt-1">Basketball FRVR</span>
			</a>

		</div>
		
	    
</div>