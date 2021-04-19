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
body{
  background-color:#ddd;
}
  .contact-form{
    background: #ddd;
    margin-top: 5%;
    margin-bottom: 5%;
    width: 100%;
}
.contact-form .form-control{
    border-radius:2rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: 5%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -13%;
    text-align: center;
    color:#158030;
    font-size:24px;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 2rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 100%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #e65144;
    border: none;
    cursor: pointer;
}
.size{
  font-size:16px;
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
          <li><a href="Login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        </ul>

      </div>
      <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
      </span>
    </div>
  </nav>

  <div class="container contact-form">
            <div class="contact-image">
               <img src="pictures/email.png" alt="mail">
            </div>
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control size" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control size" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control size" placeholder="Your Phone Number *" value="" />
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control size" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact size" value="Send Message" />
                        </div>
                    </div>
                  
              
                  
                </div>
            </form>
</div>
 


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
