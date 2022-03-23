
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Business website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }

    /* Set a style for all buttons */
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.pwd {
      float: right;
      padding-top: 16px;
    }

/* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
    }
  
    @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.pwd {
        display: block;
        float: none;
      }
      .cancelbtn {
        width: 100%;
      }
    }
  </style>
  </head>
  <body>

      <div class="navigation w3-highway-blue w3-container">
        <nav class="nav-container w3-padding-large">
          <div class="logo">
            <a href="#home" >HOMEWORK<span>HELPER</span></a>
          </div>
          <div class="mobile-button">
            <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
          </div>
          <div class="links">
            <a href="#about" >About</a>
            <a href="#register"
                onclick="document.getElementById('register').style.display='block'" style="width:auto;">Register</a>
            <a href="#signin" onclick="document.getElementById('signin').style.display='block'" style="width:auto;">Sign In</a>
            <a href="#contact" >Contact</a>
          </div>
          <div id="mobile-sidenav" class="mobile-links w3-highway-blue">
            <div class="mobile-logo" style="display: inline;">
              <a href="#home" class="logo">HOMEWORK<span>HELPER</span></a>
              <span style="width: 100%;"></span>
              <a href="javascript:void(0)" class="closebtn" onclick="toggleMobileNavigation()">&times;</a>
            </div>
            <a href="#about" onclick="toggleMobileNavigation()">About Us</a>
            <a href="#register"
                onclick="document.getElementById('register').style.display='block'" style="width:auto;">Register</a>
            <a href="#signin" onclick="document.getElementById('signin').style.display='block'" style="width:auto;">Sign In</a>
            <a href="#contact" onclick="toggleMobileNavigation()">Contact</a>
          </div>
        </nav>
      </div>

      <div class="hero" id="home">
        <div class="text container">
          <p class="pre-title">Hello Students, One stop for organizing homework</p>
          <h1 class="title"> HOMEWORK<span>HELPER</span></h1>
          <p class="post-title">Begin!</p>
          <a class="w3-button w3-round-large w3-indigo w3-hover-blue" href="#register" onclick="document.getElementById('register').style.display='block'" style="width:auto;">Register Here</a>
        </div>
      </div>

      <div class="about container w3-padding-large" id="about">
        <div class="text-one">
          <h2>About Us</h2>
          <p>Are you a student struggling to stay organized? Do you often find it difficult to remember all your deadlines? Look no further, because HOMEWORK HELPER solves these problems by keeping all your student needs in once place! HOMEWORK HELPER is a 2-in-1 planner and notes app. Record all your homework, deadlines, and school-related obligations in the same, easily viewable calendar. Get automatic notifications for all these deadlines as early and as frequent as you want. Create notes and organize them by subject, and create as many folders within each subject as you need. With the press of a button, freely draw or annotate on your notes using your mouse or a stylus with a compatible touchscreen.</p>
        </div>
      </div>

      <div class="modal" id="signin">
        <div class="text-one">
          <form class="modal-content animate" action="login_home.php" method="get">
            <div class="imgcontainer">
              <span onclick="document.getElementById('signin').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
              <label for="emailid"><b>Username</b></label>
              <input type="text" id="emailid" placeholder="Enter Username" name="emailid" required>

              <label for="pwd"><b>Password</b></label>
              <input type="password" id="pwd" placeholder="Enter Password" name="pwd" required>
        
              <button type="submit">Login</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('signin').style.display='none'" class="cancelbtn">Cancel</button>
              <span class="pwd">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>
      </div>
    
       <div class="modal" id="register">
        <div class="text-one">
          <form class="modal-content animate" action="Registration.php" method="get">
            <div class="imgcontainer">
              <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
              <label for="emailid"><b>Username</b></label>
              <input type="text" id="emailid" placeholder="Enter Username" name="emailid" required>

              <label for="pwd"><b>Password</b></label>
              <input type="password" id= "pwd" placeholder="Enter Password" name="pwd" required>

              <label for="pwd"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm Password" name="cpwd" required>
        
              <button type="submit">Register</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          </form>
        </div>
      </div>

      <div class="contact container" id="contact">
        <div class="short-contact">
          <h2>Contact us</h2>
          <div class="w3-large w3-margin-top contact-info">
            <i class="fa fa-location-arrow"></i><span style="margin-left:10px;"><a href="https://www.google.com/maps/place/London,+UK/@51.5287352,-0.3817852,10z/data=!3m1!4b1!4m5!3m4!1s0x47d8a00baf21de75:0x52963a5addd52a99!8m2!3d51.5072178!4d-0.1275862" target="_blank">23th Street, London, England</a></span><br>
            <i class="fa fa-envelope-o"></i><span style="margin-left:10px;"><a href="connect@factor.com">connect@factor.com</a></span><br>
            <i class="fa fa-phone"></i><span style="margin-left:10px;"><a href="+44 0197532486">+44 0197532486</a></span><br>
          </div>
          <div class="w3-large w3-margin-top contact-info">
            <i class="fa fa-linkedin"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;">- LinkedIn</a></span><br>
            <i class="fa fa-facebook"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;"> - Facebook</a></span><br>
            <i class="fa fa-twitter"></i><span style="margin-left:10px;"><a href="#" target="_blank" style="text-decoration: none;">- Twitter</a></span><br>
          </div>
        </div>
      </div>

      <div class=" w3-highway-blue w3-padding-large" id="footer">
        <p class="w3-center logo">© 2022 - HOMEWORK<span>HELPER</span> - All rights reserved</p>
      </div>

    <script>
      function toggleMobileNavigation() {
        const mobileNavigation = document.getElementById("mobile-sidenav");
        mobileNavigation.classList.toggle('mobile-links-active');
      }

      // Get the modal
      var modal = document.getElementById('signin');
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
          }
      }
    </script>
  </body>
</html>

