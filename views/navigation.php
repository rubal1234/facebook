<?php 

session_start();

?>

<div class="container-fluid">

		<div class="row nav-row">

			<div class="col d-flex  justify-content-between m-2">


				<div class="d-flex">
					
					<svg style = "cursor: pointer;" viewBox="0 0 36 36" class="x1lliihq x1k90msu x2h7rmj x1qfuztq" fill="url(#jsc_s_2)" height="40" width="40"><a href = "../../facebook"><defs><linearGradient x1="50%" x2="50%" y1="97.0782153%" y2="0%" id="jsc_s_2"><stop offset="0%" stop-color="#0062E0"></stop><stop offset="100%" stop-color="#19AFFF"></stop></linearGradient></defs><path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path><path class="xe3v8dz" d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path></a></svg>


				<div class="search-div d-none d-sm-block mx-3">

					<div class="">
						<div class="d-flex">
							<span class="d-flex align-items-center"><i class="material-icons search-icon ps-3">search</i></span>
						    <input type="text" class="search-box" name="" placeholder="Search Facebook">
						</div>
					</div>

				</div>

				<div class="image-icon-div d-flex align-items-center justify-content-center mt-1 d-block d-xl-none">
					
					<i class="fa-solid fa-bars"></i>
				</div>


				</div>


				


				<div class="d-none d-xl-block">

					<div class="d-flex">

						 <div class="icon-div social-icon active text-center" id = "icon-div">
		                  	<i class="fa-solid fa-house search-icon home-icon icon pt-3"></i>
		                  	<span class="tooltiptext">Home</span>
		                  </div>

		                  <div class="icon-div social-icon text-center" id = "icon-div">
		                  	<i class="fa-solid fa-tv search-icon home-icon icon pt-3"></i>
		                  	<span class="tooltiptext">Watch</span>
		                  </div>

		                  <div class="icon-div social-icon text-center" id = "icon-div">
		                    <i class="fa-solid fa-store search-icon home-icon icon pt-3"></i>
		                    <span class="tooltiptext">Market</span>
		                  </div>

		                   <div class="icon-div social-icon text-center" id = "icon-div">
		                  	<i class="fa-solid fa-users search-icon home-icon icon pt-3"></i>
		                  	<span class="tooltiptext">Groups</span>
		                  </div>

		                   <div class="icon-div social-icon text-center" id = "icon-div">
		                   	<i class="fa-solid fa-gamepad search-icon home-icon icon pt-3"></i>
		                   	<span class="tooltiptext">Gaming</span>
		                  </div>
								
						</div>

				</div>

			<div class="d-flex">

				<div class="image-icon-div d-none d-md-flex align-items-center justify-content-center mt-1">
                  	<img src="../images/menu.png" alt='img' class="image-icon">
                  	<span class="tooltiptext">Menu</span>
                </div>

                <div class="image-icon-div d-none d-sm-flex align-items-center justify-content-center mt-1">
                  	<img src="../images/messenger.png" alt='img' class="image-icon">
                  	<span class="tooltiptext">Messenger</span>
                </div>

                <div class="image-icon-div d-none d-sm-flex align-items-center justify-content-center mt-1">
                  	<img src="../images/notification.png" alt='img' class="image-icon">
                  	<span class="tooltiptext">Notification</span>
                </div>

                <div class="image-icon-div account-div d-flex align-items-center justify-content-center mt-1" style="background: none;">
                  	<img src='<?php echo $_SESSION["image-path"]?>' alt='img' class="image-icon rounded-circle" style= "width: 45px;">
                  	<span class="tooltiptext">Account</span>
                  	<div class = "logout-div">
                  		<div class="setting-module account-module">Setting</div>
						<div class = "logout-module account-module">Logout</div>
					</div>
                </div>

				
			</div>
				


			</div>
			


		</div>
		

	</div>