<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/styles.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>


	<div class="container-fluid">
		<div class="row p-2">
			<div class="col-6">
				<img src = "images/facebook.png" style="width: 145px;">
			</div>
			<div class="col-6 d-flex p-2 justify-content-end">
				<input type="text" name="" class="border rounded ps-3 input" readonly="readonly" value = "xyz@gmail.com">
				<input type="password" name="" class="ms-3 border rounded ps-3 input" readonly="readonly" value = "sdfggfds">
				<button class="btn btn-primary ms-3 disabled">Log in</button>
			</div>
		</div>
	</div>


<!-- Modal -->
<div class="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Reset Your Password</h4>
      </div>
      <div class="modal-body">
        <p>	Please enter your email address to reset password</p>
		<input type="email" name="" class="form-control" required="required" placeholder="Please enter your email address">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-send">Send</button>
      </div>
    </div>
  </div>
</div>
	<script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>