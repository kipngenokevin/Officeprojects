<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Gichuki Greens Home</title>
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
          <li><a href="index">Home</a></li>
          <li>
            <div class="dropdown">
              <button class="dropbtn">About Us</button>
              <div class="dropdown-content">
                <a href="About_us#vision_section">Our Vision</a>
                <a href="About_us#mission_section">Mission</a>
                <a href="About_us#objectives">Objectives</a>
              </div>
            </div>
          </li>
          <li><a href="Resources">Resources</a></li>
          <li><a href="Contact">Contact</a></li>
          <li><a href="Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="Login"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        </ul>

      </div>
      <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
      </span>
    </div>
  </nav>
    <section class="home">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 landing-text">
            <p>Record Keeping In The Farm Made Easy</p>
          </div>
          <div class="col-sm-8">

          </div>
        </div>
      </div>
    </section>
    <section class="mid-section">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 mid-section-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non suscipit dui. Sed ut ornare felis. Pellentesque ut posuere massa. Nulla eu massa venenatis, consequat enim nec, luctus turpis. Mauris at dictum ipsum. Nam ac aliquet tortor. Mauris vulputate, lacus non rhoncus sagittis, velit lacus laoreet enim, id maximus diam nisi in lorem.
          <br>
          <button class="button button5">Learn More</button>
        </div>
        <div class="col-sm-2"></div>
      </div>

    </section>

    <section class="third-section">
      <h1 style="text-align:center; margin-top:25px; font-weight:bold;"> Meet Our Wonderful Team</h1>

      <div class="container-fluid card-section">
        <div class="row">
          <div class="col-sm-3">
            <div class="card cards" style="max-width:250px">
              <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card cards" style="max-width:250px">
              <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card cards" style="max-width:250px">
              <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card cards" style="max-width:250px">
              <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">See Profile</a>
              </div>

            </div>
          </div>
        </div>

      </section>

      <section class="fourth-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-4">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque turpis nulla, placerat eget magna ullamcorper, egestas commodo ipsum. Mauris vitae varius mi. Nam massa nibh, tincidunt ultricies suscipit in, mollis eget arcu. Etiam quis vulputate enim, quis cursus ex. Morbi auctor porttitor erat, eget facilisis nulla laoreet vitae. </p>
              <br>
              <button class="button button6">Learn More -></button>
            </div>
            <div class="col-sm-8">
              <img class="img-responsive" src="pictures/sevices.png" alt="Services"/>
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
