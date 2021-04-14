
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Fixed Animated NavBar</title>
  <link rel="stylesheet" href="./style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">

  <style>
  .dropbtn {
    background-color: Transparent;
    font-size: 2.0rem;
    color: white;
    border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
    z-index: 1;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color:#158030;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    text-decoration: none;
    display: block;
    padding:0px;
    text-align: center;
  }

  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: transparent;}
  .dropdown:hover .dropbtn  {color:#F5796D;}

  * {
    box-sizing:border-box;
  }
  .about_us{
    background-image:url("pictures/about_us_1.jpg");
  }
  .containr {
    padding: 64px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both
  }

  .column-66 {
    float: left;
    width: 66.66666%;
    padding: 20px;
  }

  .column-33 {
    float: left;
    width: 33.33333%;
    padding: 20px;
  }

  .large-font {
    font-size: 48px;
  }

  .xlarge-font {
    font-size: 64px
  }

  .button_about {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
    background-color: #4CAF50;
  }

  img {
    display: block;
    height: auto;
    max-width: 100%;
  }

  @media screen and (max-width: 1000px) {
    .column-66,
    .column-33 {
      width: 100%;
      text-align: center;
    }
    img {
      margin: auto;
    }
  }

  </style>


</head>
<body>
  <!-- partial:index.partial.html -->


  <nav class="nav">
    <div class="container">
      <div class="logo">
        <a href="#">Your Logo</a>
      </div>
      <div id="mainListDiv" class="main_list">
        <ul class="navlinks">
          <li><a href="index.php">Home</a></li>
          <li>
            <div class="dropdown">
              <button class="dropbtn">About Us</button>
              <div class="dropdown-content">
                <a href="About_us.php#vision_section">Our Vision</a>
                <a href="About_us.php#mission_section">Mission</a>
                <a href="About_us.php#objectives">Objectives</a>
              </div>
            </div>
          </li>
          <li><a href="Resources.php">Resources</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>

      </div>
      <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
      </span>
    </div>
  </nav>
  <section class="about_us">

    <!-- The App Section -->
    <div class="container containr">
      <div class="row">
        <div class="column-66">
          <h1 class="xlarge-font"><b>The App</b></h1>
          <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why buy it?</b></h1>
          <p><span style="font-size:36px">Take photos like a pro.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <button class="button_about">Download Application</button>
        </div>
        <div class="column-33">
          <img src="/w3images/img_app.jpg" width="335" height="471">
        </div>
      </div>
    </div>
</section>
    <!-- Clarity Section -->
    <div class="container containr" style="background-color:#f1f1f1">
      <div class="row">
        <div class="column-33">
          <img src="/w3images/app5.jpg" alt="App" width="335" height="471">
        </div>
        <div class="column-66">
          <h1 class="xlarge-font"><b>Clarity</b></h1>
          <h1 class="large-font" style="color:red;"><b>Pixels, who?</b></h1>
          <p><span style="font-size:24px">A revolution in resolution.</span> Sharp and clear photos with the world's best photo engine, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <button class="button_about" style="background-color:red">Read More</button>
        </div>
      </div>
    </div>

    <!-- The App Section -->
    <div class="container containr">
      <div class="row">
        <div class="column-66">
          <h1 class="xlarge-font"><b>The App</b></h1>
          <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why buy it?</b></h1>
          <p><span style="font-size:36px">Take photos like a pro.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          <button class="button_about">Download Application</button>
        </div>
        <div class="column-33">
          <img src="/w3images/img_app.jpg" width="335" height="471" >
        </div>
      </div>
    </div>

  </section>


  <footer class="footer-32892 pb-0">
    <div class="site-section">
      <div class="container">


        <div class="row">

          <div class="col-md pr-md-5 mb-4 mb-md-0">
            <h3>About Us</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam itaque unde facere repellendus, odio et iste voluptatum aspernatur ratione mollitia tempora eligendi maxime est, blanditiis accusamus. Incidunt, aut, quis!</p>
            <ul class="list-unstyled quick-info mb-4">
              <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-phone"></span> +1 291 3912 329</a></li>
              <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-envelope"></span> info@gmail.com</a></li>
            </ul>

            <form action="#" class="subscribe">
              <input type="text" class="form-control" placeholder="Enter your e-mail">
              <input type="submit" class="btn btn-submit" value="Send">
            </form>
          </div>
          <div class="col-md mb-4 mb-md-0">
            <h3>Latest Tweet</h3>
            <ul class="list-unstyled tweets">
              <li class="d-flex">
                <div class="mr-4"><span class="icon icon-twitter"></span></div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
              </li>
              <li class="d-flex">
                <div class="mr-4"><span class="icon icon-twitter"></span></div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
              </li>
              <li class="d-flex">
                <div class="mr-4"><span class="icon icon-twitter"></span></div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
              </li>
            </ul>
          </div>


          <div class="col-md-3 mb-4 mb-md-0">
            <h3>Instagram</h3>
            <div class="row gallery">
              <div class="col-6">
                <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-6">
                <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="py-5 footer-menu-wrap d-md-flex align-items-center">
              <ul class="list-unstyled footer-menu mr-auto">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Our works</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
              <div class="site-logo-wrap ml-auto">
                <a href="#" class="site-logo">

                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>

  <!-- Jquery needed -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>

  <!-- Function used to shrink nav bar removing paddings and adding black background -->
  <script>
  $(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('.nav').addClass('affix');
      console.log("OK");
    } else {
      $('.nav').removeClass('affix');
    }
  });
  </script>
  <!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
