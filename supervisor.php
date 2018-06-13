<?php
/**
 * Created by PhpStorm.
 * User: Abigail
 * Date: 6/12/2018
 * Time: 10:04 PM
 */
?>

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

    <div class="container">
        <p>CONFIRMATION FORM<span class="fa fa-2x fa-pencil"></span></div></p>
    <form class="" method="POST" enctype="" action="">
        <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" required placeholder="FirstName">
        </div>

        <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" required placeholder="LastName">
        </div>

        <div class="form-group">
            <label>Middle Name:</label>
            <input type="text" class="form-control" required placeholder="MiddleName">
        </div>
        <div class="form-group">
            <label>Reg Number:</label>
            <input type="text" class="form-control" required placeholder="Regnumber">
        </div>

        <div class="form-group">
            <label>Leave Of Absence:</label>
            <select class="form-control">
                <option value="selectoption" selected>Select Any Option</option>

                <option value="no leave of absence">NO</option>
                <option value="No of Semester(s)">1</option>
                <option value="No of Semester(s)">2</option>
                <option value="No of Semester(s)">3</option>
                <option value="No of Semester(s)">4</option>
                <option value="No of Semester(s)">5</option>
            </select>
        </div>

        <div class="form-group">
            <label>Submission Date:</label>
            <input type="text" class="form-control" required placeholder="submissiondate">
        </div>

        <div class="form-group">
            <label>Project Title:</label>
            <textarea class="form-control" name="text" placeholder="Project Title"></textarea>
        </div>

        <div class="form-control
">
            <label>Seminar Type:</label>
            <input type="checkbox" class="form-control" name="seminar_type" value="Concept">
            <input type="checkbox" class="form-control" name="seminar_type" value="Progress">
            <input type="checkbox" class="form-control" name="seminar_type" value="Public Lecture">
        </div>

        <div class="form-group">
            <label>Degree of Study:</label>
            <input type="checkbox" class="form-control" name="degree0fstudy" value="PGD">
            <input type="checkbox" class="form-control" name="degree0fstudy" value="MSc">
            <input type="checkbox" class="form-control" name="degree0fstudy" value="M Phil">
            <input type="checkbox" class="form-control" name="degree0fstudy" value="PHD">
        </div>

        <div class="form-group">
            <label>Candidate's Telephone Number:</label>
            <input type="text" class="form-control" required placeholder="Phone Number">
        </div>

        <div class="form-group">
            <label>Proposed Seminar Month:</label>
            <select class="form-control">
                <option value="selectmonth" selected>Select Month Option</option>

                <option value="month">January</option>
                <option value="month">February</option>
                <option value="month">March</option>
                <option value="month">April</option>
                <option value="month">May</option>
                <option value="month">June</option>
                <option value="month">July</option>
                <option value="month">August</option>
                <option value="month">September</option>
                <option value="month">October</option>
                <option value="month">November</option>
                <option value="month">December</option>
            </select>
        </div>

        <div class="form-group">
            <label>Supervisor's Name:</label>
            <select class="form-control">
                <option value="selectname" selected>Select Supervisor's Name</option>

                <option value="name">NO</option>
                <option value="name">1</option>
                <option value="name">2</option>
                <option value="name">3</option>
                <option value="name">4</option>
                <option value="name">5</option>
            </select>
        </div>

        <button type="sign-up-now" class="btn btn-success form-group">Sign Up Now</button>
    </form>
</div>


<footer>
    <?php require ('footer.php');?>
</footer>




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

