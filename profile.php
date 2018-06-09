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
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--          <a class="navbar-brand" href="#">Graft Pink</a>-->
            <div id="image-wrapper">
                <img src="images/oaulogo.png" class="img-responsive">
            </div>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="./">About Us</a></li>
                <li><a href="../navbar-fixed-top/">Contact Us</a></li>
                <li><a href="login.php/navbar-fixed-top/" class=" btn btn-success"> <i class="glyphicon glyphicon-pencil"></i>UpdateForm</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>


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

    <footer>
        <div class="footer">
            <div class="row">
                <div class ="col-md-4"><p>Examination Time Table<br>Contact Us</br><br>Student Help</br><br>Staff Help</b></p></div>
                <div class="col-md-4"><p>Privacy Statement<br>Term And Condition of Use</br><br>Legal Notice</br><br>FAQS</br><br>Lecture Time Table</br></p>
                </div>
                <div class= "col-md-4"> <img src="images/remita-payment-logo-vertical.png"> </div>
            </div>
            <div class="bottom"><p>&copy;2016- 2017 Obafemi Awolowo University</p>
            </div>
        </div>
    </footer>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
