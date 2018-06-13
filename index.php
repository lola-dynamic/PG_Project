<?php
//session_start();
//require ('connect.php');
//
//if (isset($_POST['submit_form'])) {
//
////        var_dump($sql);
//
//    $first_name     = $_POST['first_name'];
//    $last_name     = $_POST['last_name'];
//    $email   = $_POST['email'];
//    $phone    = $_POST['phone'];
//    $password  = $_POST['password'];
//    $user_name  = $_POST['user_name'];
//    $dob     = $_POST['dob'];
//    $address     = $_POST['address'];
//    $state     = $_POST['state'];
//
////    PREVENTION FROM SQL INJECTION
//    $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
//    $hash = $mysqli->escape_string(md5(rand(0, 1000)));
//
////  TO HASH THE PASSWORD CODE GOES HERE
//    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
//    $num_rows = mysqli_num_rows($result);
//
//    if ($result->num_rows > 0) {
//
//        echo "User with this email already exists!";
//
//    } else {
//
//      // else proceed with the registration
//      $sql = "INSERT INTO users(first_name, last_name, email, phone, password, user_name, dob, address, state) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password', '$user_name', '$dob', '$address', '$state')";
//
//      $Result = $mysqli->query($sql);
//
//      if ($Result) {
//
//        $_SESSION['logged_in'] = true;
//        echo "  Hello  $user_name, Thank you for signing up!";
//
//      }else {
//
//          echo "Registration failed, please try again.";
//
//      }
//
//    }
//
//  }

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
      <div class="title">
        <h3>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING<br> OBAFEMI AWOLOWO UNIVERSITY, ILE-IFE, NIGERIA<br>
        POSTGRADUATE SEMINAR FORM</h3>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

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

        <div class="footer">
            <footer >
                <?php require('footer.php');?>
            </footer>
        </div>



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