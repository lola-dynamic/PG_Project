<?php
///**
// * Created by PhpStorm.
// * User: Abigail
// * Date: 7/11/2018
// * Time: 10:50 PM
// */
//?>
<!---->
<!---->
<?php
////include ('header.php');
//
////session_start();
//require ('connect.php');
//
//if (isset($_POST['submit_form'])) {
//
////        var_dump($sql);
//
//    $first_name     = $_POST['first_name'];
//    $middle_name     = $_POST['middle_name'];
//    $last_name     = $_POST['last_name'];
//    $reg_number   = $_POST['reg_number'];
//    $loa   = $_POST['leave_absence'];
////    $submission_date  = $_POST['submission_date'];
//    $project_title  = $_POST['project_title'];
//    $seminar_type    = $_POST['seminar_type'];
//    $dos     = $_POST['degree_study'];
//    $phone_no     = $_POST['phone_no'];
//    $seminar_month    = $_POST['seminar_month'];
//    $supervisors_name     = $_POST['supervisor_name'];
//
////  TO HASH THE PASSWORD CODE GOES HERE
//    $hash = $mysqli->escape_string( md5( rand(0,1000) ) );
//    $result = $mysqli->query("SELECT * FROM form WHERE reg_number='reg_number'");
//    $num_rows = mysqli_num_rows($result);
//
//    if ($result->num_rows > 0) {
//
//        echo "User with this registration number already exists!";
//
//    } else {
//
//        // else proceed with the registration
//        $sql = "INSERT INTO form(first_name, middle_name, last_name, reg_number, leave_absence, project_title, seminar_type, degree_study, phone_no, seminar_month, supervisors_name, hash)
// VALUES ('$first_name', '$middle_name' '$last_name', '$reg_number', '$loa', '$project_title', '$seminar_type', '$dos', '$phone_no', '$seminar_month', '$supervisors_name', '$hash')";
//
//        $Result = $mysqli->query($sql);
//
//        if ($Result) {
//
//            $_SESSION['active']     == 0;  // 0 untill supervisor approve the serminar form
//            $_SESSION['logged_in'] == true;
//            echo "  Hello  $first_name, Thank you for filling the form!<br>
//            Confirmation link has been sent to $supervisor_name, please check your email $email
//                 account to se if your supervisor has approve your form!";
//
//            // Send registration confirmation link (verify.php)
//            $to      = $email;
//            $subject = 'Confirmation of Candidate Seminar Form ( abigailomolola1@gmail.com )';
//            $message_body = '
//        Hello '.$first_name.',
//
//        Thank you for signing up!
//
//        Please click this link to activate your account:
//
//        http://localhost/pg_project/supervisor.php?email='.$email.'&hash='.$hash;
//
//            mail( $to, $subject, $message_body );
//
//            header("location: profile.php");
//            echo "registration successful";
//
//        }
//
//
//    }
//
//}
//
//?>
<!---->
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->-->
<!--    <meta name="description" content="">-->
<!--    <meta name="author" content="">-->
<!--    <link rel="icon" href="../../favicon.ico">-->
<!---->
<!--    <title>PG SERMINAR PORTAL</title>-->
<!---->
<!--    <!-- Bootstrap core CSS -->-->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link href="css/style.css" rel="stylesheet">-->
<!---->
<!--    <!-- Custom styles for this template -->-->
<!--    <link href="jumbotron.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<!--    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->-->
<!--    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->-->
<!--    <!--    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->-->
<!--    <script src="js/my_js.js"></script>-->
<!---->
<!--</head>-->
<!--<body>-->
<!--<nav class="navbar navbar-info navbar-fixed-top">-->
<!--    <div class="container">-->
<!--        <div class="navbar-header">-->
<!--            <div id="logo">-->
<!--                <a href="index.php">-->
<!--                    <img src="images/untitled-2-6.png" class="img-responsive">-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div id="navbar" class="navbar-collapse collapse">-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>-->
<!--                <li><a href="./">About Us</a></li>-->
<!--                <li><a href="../navbar-fixed-top/">Contact Us</a></li>-->
<!--                <li><a href="seminar_form.php"  class="btn btn-success"> <i class="glyphicon glyphicon-user"></i>Update</a></li>-->
<!--                <li><a href="index.php" class=" btn btn-danger"> <i class="glyphicon glyphicon-user"></i>Log Out</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->
<!---->
<!---->
<!--<div class="content-wrapper">-->
<!--    <div class="seminar_form">-->
<!--        <div class="form">-->
<!--            <p>SEMINAR FORM<span class="fa fa-2x fa-pencil"></span></div></p>-->
<!--        <form class="" method="POST" enctype="" action="">-->
<!--            <div class="form-group">-->
<!--                <label>First Name<span class="req">*</span>:</label>-->
<!--                <input type="text" class="form-control" name="first_name" required placeholder="FirstName">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>middle Name:</label>-->
<!--                <input type="text" class="form-control" name="middle_name" placeholder="LastName">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Last Name<span class="req">*</span>:</label>-->
<!--                <input type="text" class="form-control" name="last_name"  required placeholder="LastName">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Reg Number<span class="req">*</span>:</label>-->
<!--                <input type="text" class="form-control" name="reg_number"  required placeholder="Regnumber">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Leave Of Absence<span class="req">*</span>:</label>-->
<!--                <select class="form-control" name="leave_absence">-->
<!--                    <option value="selectoption" name="leave_absence" selected>Select Any Option</option>-->
<!---->
<!--                    <option value="No leave of absence" name="leave_absence">NO</option>-->
<!--                    <option value="No of Semester(s)" name="leave_absence">1</option>-->
<!--                    <option value="No of Semester(s)" name="leave_absence">2</option>-->
<!--                    <option value="No of Semester(s)" name="leave_absence">3</option>-->
<!--                    <option value="No of Semester(s)" name="leave_absence">4</option>-->
<!--                    <option value="No of Semester(s)" name="leave_absence">5</option>-->
<!--                </select>-->
<!--            </div>-->
<!---->
<!--            <!--            <div class="form-group">-->-->
<!--            <!--                <label>Submission Date:</label>-->-->
<!--            <!--                <input type="datetime-local" class="form-control"  name="submission_date" required placeholder="submissiondate">-->-->
<!--            <!--            </div>-->-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Project Title<span class="req">*</span>:</label>-->
<!--                <textarea class="form-control" name="project_title" placeholder="Project Title"></textarea>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Seminar Type<span class="req">*</span>:&nbsp&nbsp</label>-->
<!--                <input type="radio" name="seminar_type"-->
<!--                    --><?php //if (isset($seminar_type) && $seminar_type=="concept");?>
<!--                       value="concept">Concept &nbsp&nbsp-->
<!---->
<!--                <input type="radio" name="seminar_type"-->
<!--                    --><?php //if (isset($seminar_type) && $seminar_type=="progress") echo "<button type=\"submit\" name=\"btn-upload\">upload</button>";?>
<!--                       value="progress">Progress &nbsp&nbsp-->
<!---->
<!--                <input type="radio" name="seminar_type"-->
<!--                    --><?php //if (isset($seminar_type) && $seminar_type=="public_lecture");?>
<!--                       value="public_lecture">Public Lecture &nbsp&nbsp-->
<!---->
<!--                <!--                <input type="radio" class="" name="seminar_type" value="Concept">Concept &nbsp&nbsp-->-->
<!--                <!--                <input type="radio" class="" name="progress_type" value="Progress">Progress &nbsp&nbsp-->-->
<!--                <!--                <input type="radio" class="" name="seminar_type" value="Public Lecture">Public Lecture &nbsp-->-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Degree of Study<span class="req">*</span>:&nbsp&nbsp</label>-->
<!--                <input type="radio" class="" name="degree_study" value="PGD">PGD &nbsp&nbsp-->
<!--                <input type="radio" class="" name="degree_study" value="MSc">MSc &nbsp&nbsp-->
<!--                <input type="radio" class="" name="degree_study" value="M Phil">M Phil &nbsp&nbsp-->
<!--                <input type="radio" class="" name="degree_study" value="PHD">PHD-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Candidate's Telephone Number<span class="req">*</span>:</label>-->
<!--                <input type="text" class="form-control"  name="phone_no" required placeholder="Phone Number">-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Proposed Seminar Month<span class="req">*</span>:</label>-->
<!--                <select class="form-control" name="seminar_month">-->
<!--                    <option value="selectmonth" name="seminar_month"  selected>Select Month Option</option>-->
<!---->
<!--                    <option value="month" name="seminar_month">January</option>-->
<!--                    <option value="month" name="seminar_month">February</option>-->
<!--                    <option value="month" name="seminar_month">March</option>-->
<!--                    <option value="month" name="seminar_month">April</option>-->
<!--                    <option value="month" name="seminar_month">May</option>-->
<!--                    <option value="month" name="seminar_month">June</option>-->
<!--                    <option value="month" name="seminar_month">July</option>-->
<!--                    <option value="month" name="seminar_month">August</option>-->
<!--                    <option value="month" name="seminar_month">September</option>-->
<!--                    <option value="month" name="seminar_month">October</option>-->
<!--                    <option value="month" name="seminar_month">November</option>-->
<!--                    <option value="month" name="seminar_month">December</option>-->
<!--                </select>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label>Supervisor's Name<span class="req">*</span>:</label>-->
<!--                <select class="form-control" name="supervisor_name">-->
<!--                    <option value="selectname" name="supervisor_name"  selected>Select Supervisor's Name</option>-->
<!---->
<!--                    <option value="name" name="supervisor_name">Dr Aina</option>-->
<!--                    <option value="name" name="supervisor_name">Dr Oluwaranti</option>-->
<!--                    <option value="name" name="supervisor_name">Ms Lawal</option>-->
<!--                    <option value="name" name="supervisor_name">Mr Ayeni</option>-->
<!--                    <option value="name" name="supervisor_name">Dr Afolabi</option>-->
<!--                    <option value="name" name="supervisor_name">Dr Akinyemi</option>-->
<!--                </select>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <button type="submit" class="btn btn-success" name="submit_form">Submit Form</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<?php //require ('footer.php');?>
