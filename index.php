<?php
session_start();
require ('connect.php');

if (isset($_POST['submit_form'])) {

//        var_dump($sql);

    $first_name     = $_POST['first_name'];
    $last_name     = $_POST['last_name'];
    $email   = $_POST['email'];
    $phone    = $_POST['phone'];
    $password  = $_POST['password'];
    $user_name  = $_POST['user_name'];
    $dob     = $_POST['dob'];
    $address     = $_POST['address'];
    $state     = $_POST['state'];

//    PREVENTION FROM SQL INJECTION
    $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
    $hash = $mysqli->escape_string(md5(rand(0, 1000)));

//  TO HASH THE PASSWORD CODE GOES HERE
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    $num_rows = mysqli_num_rows($result);

    if ($result->num_rows > 0) {

        echo "User with this email already exists!";

    } else {

      // else proceed with the registration
      $sql = "INSERT INTO users(first_name, last_name, email, phone, password, user_name, dob, address, state) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password', '$user_name', '$dob', '$address', '$state')";

      $Result = $mysqli->query($sql);

      if ($Result) {

        $_SESSION['logged_in'] = true;
        echo "  Hello  $user_name, Thank you for signing up!";

      }else {

          echo "Registration failed, please try again.";

      }

    }

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>PG SERMINAR PORTAL</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
      <script src="js/my_js.js"></script>
<!--      <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
<!--      <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->

  </head>


  <body>

    <nav class="navbar navbar-info navbar-fixed-top">
      <div class="container">
       <?php require('header.php');?>
      </div>
    </nav>

    <p id="demo"></p>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron text-center">
      <div class="container">
        <h3>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING<br> OBAFEMI AWOLOWO UNIVERSITY, ILE-IFE, NIGERIA<br>
        POSTGRADUATE SEMINAR FORM</h3>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slide1.jpg" alt="oau-photo">
                <div class="carousel-caption">
                    <h3>Welcome to OAU</h3>
                    <p>PG Serminar page</p>
                </div>
            </div>

            <div class="item">
                <img src="images/oauf.jpg" alt="oau- photo">
                <div class="carousel-caption">
                    <h3>Welcome to OAU</h3>
                    <p>PG Serminar page</p>
                </div>
            </div>

            <div class="item">
                <img src="images/slide1.jpg" alt="oau-photo">
                <div class="carousel-caption">
                    <h3>Welcome to OAU</h3>
                    <p>PG Serminar page</p>
                </div>
            </div>
        </div>

        <footer class="">
            <?php require('footer.php');?>
        </footer>


        <!--    <div class="container">-->
<!---->
<!---->
<!--      <h3>Registration Form</h3>-->
<!--      <p>Kindly fill the form below to reach you</p>-->
<!--      <hr class="pink hr">-->
<!---->
<!--      <form class="" method="POST" enctype="" action="">-->
<!--        -->
<!--        <div class="form-group">-->
<!--          <label>First Name</label>-->
<!--          <input type="text" class="form-control" name="first_name" required="required">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>Last Name</label>-->
<!--          <input type="text" class="form-control" name="last_name" required="required">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>Email Address</label>-->
<!--          <input type="email" class="form-control" name="email" required="required">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>Phone Number</label>-->
<!--          <input type="tel" class="form-control" name="phone" required="required">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>Password</label>-->
<!--          <input type="password" class="form-control" name="password" required="required">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>User Name</label>-->
<!--          <input type="text" class="form-control" name="user_name" required="required">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>Date Of Birth</label>-->
<!--          <input type="date" class="form-control" name="dob" required="required">-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>Address</label>-->
<!--          <textarea class="form-control" name="address" placeholder="Please Enter Your Address here"></textarea>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--          <label>State Of Origin</label>-->
<!--          <input type="text" class="form-control" name="state" required="required">-->
<!--        </div>-->
<!---->
<!--        <button class="btn btn-success btn-block" name="submit_form">Submit</button>-->
<!---->
<!--      </form>-->
<!---->
<!--    </div>-->


<!--        javascript codes go here-->
        <script>
            function myFunction() {
                var form;
                var name = prompt("Please enter your name:");
                var regno = prompt("enter your registration no:");
                var password = prompt("enter your password:");

                if (name == null || name == "" && regno == null || regno == "" && password == null || password == "") {
                    alert("You have not fill up the fields");
                } else {
                    form = "Hello" + name + ",You are welcome to seminar page!";
                }
                document.getElementById("demo").innerHTML = form;
            // <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
            //         <form method="post" action="/action_page_post.php">
            //         <div>
            //         <h3>Login information</h3>
            //     <label for="usrnm" class="ui-hidden-accessible">Username:</label>
            //     <input type="text" name="user" id="usrnm" placeholder="Username">
            //         <label for="pswd" class="ui-hidden-accessible">Password:</label>
            //     <input type="password" name="passw" id="pswd" placeholder="Password">
            //         <label for="log">Keep me logged in</label>
            //     <input type="checkbox" name="login" id="log" value="1" data-mini="true">
            //         <input type="submit" data-inline="true" value="Log in">
            //         </div>
            //         </form>
            //         </div>

            }
                    </script>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>