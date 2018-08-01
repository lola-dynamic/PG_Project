<?php
/**
 * Created by PhpStorm.
 * User: Abigail
 * Date: 7/11/2018
 * Time: 10:50 PM
 */
?>


<?php
include ('header.php');

include('./utility/Services.php');

//session_start();
require ('connect.php');

// Redirect if not logged in

if (!isset($_SESSION['username']) && !isset($_SESSION['logged_in'])) {
    header('Location: index.php');
}

// fetch supervisor's details from database for the form
$supervisors_table  = $mysqli->query("SELECT * FROM supervisors");

// get reg number from the session
$registration_number = '';
if(isset($_SESSION['reg_number'])) {
    $registration_number = $_SESSION['reg_number'];
}



if (isset($_POST['submit_form'])) {

    $supervisor_name = $_POST['supervisor_name'];
    $supervisor_email = '';

    // fetch supervisor's email only
    $supervisor  = $mysqli->query("SELECT * FROM supervisors WHERE name='$supervisor_name'");
    $num_rows = mysqli_num_rows($supervisor);
    if ($supervisor->num_rows > 0) {
        $sup = $supervisor->fetch_assoc();
        $supervisor_email = $sup['email'];
    }

    $first_name     = $_POST['first_name'];
    $middle_name     = $_POST['middle_name'];
    $last_name     = $_POST['last_name'];
    $reg_number   = $_POST['reg_number'];
    $loa   = $_POST['leave_absence'];
    $project_title  = $_POST['project_title'];
    $seminar_type    = $_POST['seminar_type'];
    $dos     = $_POST['degree_study'];
    $phone_no     = $_POST['phone_no'];
    $seminar_month    = $_POST['seminar_month'];
    $student_email = $_SESSION['email'];


//  TO HASH THE PASSWORD CODE GOES HERE
    $hash = $mysqli->escape_string( md5( rand(0,1000) ) );
    $result = $mysqli->query("SELECT * FROM form WHERE reg_number='reg_number'");
    $num_rows = mysqli_num_rows($result);

    if ($result->num_rows > 0) {

        echo "User with this registration number already exists!";

        die("User exist");

    } else {

        // else proceed with the registration
        $sql = "INSERT INTO form(first_name, middle_name, last_name, reg_number, leave_absence, project_title, seminar_type, degree_study, phone_no, seminar_month, supervisors_name, hash)
 VALUES ('$first_name','$middle_name', '$last_name', '$reg_number', '$loa', '$project_title', '$seminar_type', '$dos', '$phone_no', '$seminar_month', '$supervisor_name', '$hash')";


        if(!mysqli_query($mysqli, $sql)) {

            echo ("Error Description: ".mysqli_error($mysqli));

        } else {

            $_SESSION['active'] = 0;  // 0 untill supervisor approve the serminar form

            $link = "http://".$_SERVER['SERVER_NAME']."/supervisor.php?email=$student_email&hash=$hash";


            $message_student = "<p>Hello  <b>$first_name</b></p><p>Thank you for filling the form!<br> 
            A confirmation link has been sent to <b>$supervisor_name</b>. <br> Do ensure to check your 
            email $student_email as a mail will be sent to you once your form has been approved!</p>";


            $message_supervisor = "<p>Hello <b>$supervisor_name</b>, <br> This is to notify you
     that <b>$first_name</b> with the registration number of <b>$reg_number</b> just submitted the seminar form<br><br>
       Kindly click the link below to approve it. <br><br>$link;
     </p>";

            // Send emails

            $service = new Services();
            $service->sendEmailToStudent($student_email, $message_student);
            $service->sendEmailToSupervisor($supervisor_email, $message_supervisor);

            echo  $message_student;
        }

    }
}

?>


<div class="content-wrapper">
    <div class="seminar_form">
        <div class="form">
            <p>SEMINAR FORM<span class="fa fa-2x fa-pencil"></span></div></p>
        <form class="" method="POST" enctype="" action="">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="first_name" required placeholder="FirstName">
            </div>

            <div class="form-group">
                <label>middle Name:</label>
                <input type="text" class="form-control" name="middle_name" placeholder="LastName">
            </div>

            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="last_name"  required placeholder="LastName">
            </div>

            <div class="form-group">
                <label>Reg Number:</label>
                <input type="text" class="form-control" name="reg_number" value="<?php echo $registration_number ?>" autocomplete="off" required placeholder="Regnumber">
            </div>

            <div class="form-group">
                <label>Leave Of Absence: ( No of semester )</label>
                <select class="form-control" name="leave_absence">
                    <option value="#" selected disabled>Select Any Option</option>
                    <option value="none">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

<!--            <div class="form-group">-->
<!--                <label>Submission Date:</label>-->
<!--                <input type="datetime-local" class="form-control"  name="submission_date" required placeholder="submissiondate">-->
<!--            </div>-->

            <div class="form-group">
                <label>Project Title:</label>
                <textarea class="form-control" name="project_title" placeholder="Project Title"></textarea>
            </div>

            <div class="form-group">
                <label>Seminar Type:&nbsp&nbsp</label>
                <input type="radio" class="" name="seminar_type" value="Concept">Concept &nbsp&nbsp
                <input type="radio" class="" name="seminar_type" value="Progress">Progress &nbsp&nbsp
                <input type="radio" class="" name="seminar_type" value="Public Lecture">Public Lecture &nbsp
            </div>

            <div class="form-group">
                <label>Degree of Study:&nbsp&nbsp</label>
                <input type="radio" class="" name="degree_study" value="PGD">PGD &nbsp&nbsp
                <input type="radio" class="" name="degree_study" value="MSc">MSc &nbsp&nbsp
                <input type="radio" class="" name="degree_study" value="M Phil">M Phil &nbsp&nbsp
                <input type="radio" class="" name="degree_study" value="PHD">PHD
            </div>

            <div class="form-group">
                <label>Candidate's Telephone Number:</label>
                <input type="text" class="form-control"  name="phone_no" required placeholder="Phone Number">
            </div>

            <div class="form-group">
                <label>Proposed Seminar Month:</label>
                <select class="form-control" name="seminar_month">
                    <option value="#" selected disabled>Select Month Option</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
            </div>

            <div class="form-group">
                <label>Supervisor's Name:</label>
                <select class="form-control" name="supervisor_name">
                    <option value="#" selected disabled>Select Supervisor's Name</option>

                    <?php
                    $num_rows = mysqli_num_rows($supervisors_table);
                    if ($supervisors_table->num_rows > 0) {
                    while($supervisor = $supervisors_table->fetch_assoc()) {
                        echo('<option value="'.$supervisor['name'].'">'.$supervisor['name'].'</option>');
                    }

                    }
                    ?>

                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success" name="submit_form">Submit Form</button>
            </div>
        </form>
    </div>
</div>


<?php require ('footer.php');?>
