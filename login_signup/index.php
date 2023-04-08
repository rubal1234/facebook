<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Facebook</title>
    <link
      rel="icon"
      href="https://cdn.iconscout.com/icon/free/png-512/facebook-social-media-fb-logo-square-44659.png"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <!-- To get the font-awesome CSS style sheet for the 'Eye Icon' located in the password field -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="contains-top-half-and-footer-bottom-half">
      <div class="global-container">
        <div class="bigger-box">
          <div class="big-box">
            <div class="left-box">
              <div class="image-box">
                <img
                  class="fb-logo"
                  src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                  alt=""
                />
              </div>
              <h2 class="logo-caption">
                Facebook helps you connect and share with the people in your
                life.
              </h2>
            </div>
            <div class="right-box">
              <div class="form-container">
                <form>
                  <div class="space">
                    <input
                      type="text"
                      class="email-box form-control"
                      placeholder="Email address or phone number"
                    />
                  </div>
                  <div class="position-relative">
                    <div class="space">
                      <input
                        type="password"
                        class="pw-box form-control"
                        placeholder="Password"
                        id="password_field"
                      />
                    </div>
                    <i
                      class="far fa-eye-slash"
                      id="toggleEyeIcon"
                      style="cursor: pointer; display: none;"
                    ></i>
                  </div>
                  <div class="space">
                    <button type="button" class="login-button">
                     <b>Log In</b> <span class="loading"><i class="fa fa-spinner fa-spin"></i></span>
                    </button>
                  </div>
                  <div class="spaceTwo adjustTwo">
                    <a href="index.php" class="adjust-forgot-pw">Forgotten password?</a>
                  </div>
                  <div class="line"></div>
                  <div>
                    <button type="button" class="create-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <b>Create New Account</b>
                    </button>
                  </div>
                </form>
              </div>
              <div class="bottom-link-box">
                <a class="bottom-link" href="#"><b>Create a Page</b></a>
                for a celebrity, band or business.
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div>
          <ul>
            <li class="list-items">English (UK)</li>
            <li class="list-items">
              <a class="list-items" href="#">中文(简体)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Bahasa Indonesia</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">日本語</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">ภาษาไทย</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Tiếng Việt</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">한국어</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Español</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Português (Brasil)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Français (France)</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Deutsch</a>
            </li>
            <button type="button" class="plus-button">+</button>
          </ul>
          <div class="line-2 reduce-margin"></div>
          <ul>
            <li class="list-items">
              <a class="list-items" href="#">Messenger</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Fb Lite</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Watch</a></li>
            <li class="list-items">
              <a class="list-items" href="#">People</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Pages</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Page Categories</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Places</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Games</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Locations</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Marketplace</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Fb Pay</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Groups</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Jobs</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Occulus</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Portal</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Instagram</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Local</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Fundraisers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Services</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Spark AR</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Shops</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Voting Information Centre</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">About</a></li>
            <li class="list-items">
              <a class="list-items" href="#">Create ad</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Create Page</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Developers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Careers</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Privacy</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">Cookies</a>
            </li>
            <li class="list-items">
              <a class="list-items" href="#">AdChoices</a>
            </li>
            <li class="list-items"><a class="list-items" href="#">Terms</a></li>
            <li class="list-items"><a class="list-items" href="#">Help</a></li>
          </ul>
          <div class="fb-clone">
            <p>
              Disclaimer: This web page is a personal portfolio project. Hence,
              please kindly do not enter any of your credentials here. We will
              not be liable for any losses or damages arising from such an
              action.
            </p>
            <a
              class="fb-clone-link"
              href="https://github.com/melvincwng/facebook-clone"
              target="_blank"
              rel="noopener noreferrer"
              >Fb Clone © 2022</a
            >
          </div>
        </div>
      </footer>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div>
              <h3 class="modal-title" id="exampleModalLabel">Sign Up</h3>
              <p>It's easy and quick</p>
            </div>
            <button type="button" class="btn-close cross-btn" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <input type="text" name="" class="form-control" placeholder="First name">
              </div>
              <div class="col-6">
                <input type="text" name="" class="form-control" placeholder="Surname">
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-3">
                <input type="text" name="" class="form-control" placeholder="Email address or phone number">
              </div>
            </div>
            <div class="row">
              <div class="col-12 mt-3">
                <input type="password" name="" class="form-control" placeholder="New password">
              </div>
            </div>
            <div class="row mt-3">
              <label style="font-size: 12px;">Date of birth <i class="fa fa-question-circle"></i></label>
              <div class="col-4">
                <select class="form-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                  <option>31</option>
                </select>
              </div>
              <div class="col-4">
                <select class="form-select">
                  <option>Jan</option>
                  <option>Feb</option>
                  <option>Mar</option>
                  <option>Apr</option>
                  <option>May</option>
                  <option>Jun</option>
                  <option>Jul</option>
                  <option>Aug</option>
                  <option>Sep</option>
                  <option>Oct</option>
                  <option>Nov</option>
                  <option>Dec</option>
                </select>
              </div>
              <div class="col-4">
                <select class="mySelect form-select"></select>
              </div>
            </div>

            <div class="row mt-3">
              <label style="font-size: 12px;">Gender <i class="fa fa-question-circle"></i></label>
              <div class="col-6">
                <div class="form-check border rounded p-2 ps-4">
                  <input class="form-check-input float-end" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check border rounded p-2 ps-4">
                  <input class="form-check-input float-end" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
              </div>
            </div>
            <p class = "mb-auto" style="font-size: 12px;">People who use our service may have uploaded your contact information to Facebook. Learn more.</p>
            <p class = "mb-auto" style="font-size: 12px;">By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time.</p>
          </div>
          <div class="modal-footer justify-content-center">
             <button type="button" class="px-5 create-button">
                <b>Sign Up</b>
              </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Script to toggle on & off the eye icon in the password field -->
    <script src="./js/toggleEyeIcon.js"></script>
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Script to change/randomize background image every time the webpage is reloaded -->
    <script src="./js/changeBackgroundImage.js"></script>
  </body>
</html>
