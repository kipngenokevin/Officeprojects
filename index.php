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
  }

  .dropdown-content {
    display: none;
    position: relative;
    background-color:rgb(9, 155, 45);
    min-width: 160px;
    box-shadow: 0px 8px 6px 0px rgba(0,0,0,0.2);

  }

  .dropdown-content a {
    color: black;
    padding: 0px 0px;
    text-decoration: none;
    display: block;
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
          <li><a href="#"></a><li>
            <div class="dropdown">
              <button class="dropbtn">Dropdown</button>
              <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
              </div>
            </div>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
              <button class="button button6">Learn More -></button>
            </div>
            <div class="col-sm-8">

            </div>
          </div>
        </div>
      </section>








      <!-- Jquery needed -->
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
