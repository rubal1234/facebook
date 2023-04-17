<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../assets/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body>

  <section class="navigation-section"></section>
   <section>
    <div class="container pb-3 px-4 px-sm-0">
        <div class="row">
            <div class="col filter-div">
                <div class="row">
                <div class="col-12 mt-5 px-md-5 pt-3">
                    <img src="../images/account.png" alt = "account" class="ps-md-4 pe-3 account-img">
                    <span class="account-title">Account Settings</span>
                </div>
            </div>

            <div class="row px-md-5 mt-3 mb-4">
                <div class="col-md-6 mt-4">
                    <div class="setting-div ms-md-3 mx-md-3 py-1">
                        <ul class="mb-0">
                            <li class="current" id = "picture-text"><i class="fas fa-user-circle pe-1"></i>Change Profile Picture</li>
                            <li class=""><i class="fas fa-lock pe-1"></i>Change Password</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Profile Setting Page !-->

                <div class="col ps-3 mt-4">

                    <div class="change-picture-div">

                        <h4 class="profile-text">Upload Profile Picture</h4>

                        <div class="row mt-4">
                            <div class="col-12 position-relative">
                                <div class="image-upload">
                                    <form action="../controller/profile.php" method="post" enctype="multipart/form-data">

                                       <label for="file-input">
                                        <img src="../images/avatar.png" class="rounded-circle" width="75px" height="75px" id = "avatar">
                                        <i class="fas fa-camera position-absolute" style="margin-top: 48px;margin-left: -16px;z-index: 1;"></i>
                                        </label>

                                        <input class = "form-control mt-3" id="file-input" type="file" accept="image/*" name = "profile"/>

                                        <input type="submit" class="btn login_btn mt-5 px-5 rounded-pill text-white disabled" id="submit">                                   
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="change-password-div">

                        <h4 class="profile-text">Change Password</h4>

                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="form-group position-relative">
                                    <label class="position-absolute bg-white label_text px-2">New Password</label>
                                    <input type="password" class="form-control input_text npwd">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="form-group position-relative">
                                    <label class="position-absolute bg-white label_text px-2">Confirm Password</label>
                                    <input type="password" class="form-control input_text cpwd">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn change_pwd_btn mt-5 px-5 rounded-pill text-white w-auto" id="submit">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>      
        </div>
            <div id = "myModal2" class="modal mt-5" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                </div>
            </div>
        </div>
   </section>

<script type="text/javascript" src = "../assets/script.js"></script>
<script type="text/javascript" src = "../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript"></script>
</body>
</html>