<?php
include ('header.php');

if (isset($_POST['submit_form'])) {

//        var_dump($sql);

    $first_name     = $_POST['first_name'];
    $last_name     = $_POST['last_name'];
    $middle_name     = $_POST['middle_name'];
    $reg_no   = $_POST['reg_no'];
    $loa   = $_POST['leave_absence'];
    $submission_date  = $_POST['submission_date'];
    $project_title  = $_POST['project_title'];
    $seminar_type    = $_POST['seminar_type'];
    $dos     = $_POST['degree_study'];
    $phone_no     = $_POST['phone_no'];
    $seminar_month    = $_POST['seminar_month'];
    $supervisors_name     = $_POST['supervisor_name'];

//  TO HASH THE PASSWORD CODE GOES HERE
    $result = $mysqli->query("SELECT * FROM users WHERE reg_no='reg_no'");
    $num_rows = mysqli_num_rows($result);

    if ($result->num_rows > 0) {

        echo "User with this registration number already exists!";

    } else {

        // else proceed with the registration
        $sql = "INSERT INTO users(first_name, last_name,middle_name, reg_no, leave_absence, submission_date project_title, seminar_type, degree_study, phone_no, seminar_month, supervisors_name)
 VALUES ('$first_name', '$last_name', '$middle_name', '$reg_no', '$loa', '$submission_date' '$project_title', '$seminar_type', '$dos', '$phone_no', '$seminar_month', '$supervisors_name')";

        $Result = $mysqli->query($sql);

        if ($Result) {

            $_SESSION['active']     == 1;
            $_SESSION['logged_in'] == true;
            echo "  Hello  $user_name, Thank you for filling the form!";
            header('location: profile.php');

        }else {

            echo "Registration failed, please try again.";

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
                <label>Last Name:</label>
                <input type="text" class="form-control" name="last_name"  required placeholder="LastName">
            </div>

            <div class="form-group">
                <label>Middle Name:</label>
                <input type="text" class="form-control" name="middle_name"  required placeholder="MiddleName">
            </div>
            <div class="form-group">
                <label>Reg Number:</label>
                <input type="text" class="form-control" name="reg_no"  required placeholder="Regnumber">
            </div>

            <div class="form-group">
                <label>Leave Of Absence:</label>
                <select class="form-control" name="leave_absence">
                    <option value="selectoption" name="leave_absence" selected>Select Any Option</option>

                    <option value="No leave of absence" name="leave_absence">NO</option>
                    <option value="No of Semester(s)" name="leave_absence">1</option>
                    <option value="No of Semester(s)" name="leave_absence">2</option>
                    <option value="No of Semester(s)" name="leave_absence">3</option>
                    <option value="No of Semester(s)" name="leave_absence">4</option>
                    <option value="No of Semester(s)" name="leave_absence">5</option>
                </select>
            </div>

            <div class="form-group">
                <label>Submission Date:</label>
                <input type="text" class="form-control"  name="submission_date" required placeholder="submissiondate">
            </div>

            <div class="form-group">
                <label>Project Title:</label>
                <textarea class="form-control" name="project_title" placeholder="Project Title"></textarea>
            </div>

            <div class="form-group">
                <label>Seminar Type:</label>
                <input type="checkbox" class="form-control" name="seminar_type" value="Concept">
                <input type="checkbox" class="form-control" name="seminar_type" value="Progress">
                <input type="checkbox" class="form-control" name="seminar_type" value="Public Lecture">
            </div>

            <div class="form-group">
                <label>Degree of Study:</label>
                <input type="checkbox" class="form-control" name="degree_study" value="PGD">
                <input type="checkbox" class="form-control" name="degree_study" value="MSc">
                <input type="checkbox" class="form-control" name="degree_study" value="M Phil">
                <input type="checkbox" class="form-control" name="degree_study" value="PHD">
            </div>

            <div class="form-group">
                <label>Candidate's Telephone Number:</label>
                <input type="text" class="form-control"  name="phone_no" required placeholder="Phone Number">
            </div>

            <div class="form-group">
                <label>Proposed Seminar Month:</label>
                <select class="form-control" name="seminar_month">
                    <option value="selectmonth" name="seminar_month"  selected>Select Month Option</option>

                    <option value="month" name="seminar_month">January</option>
                    <option value="month" name="seminar_month">February</option>
                    <option value="month" name="seminar_month">March</option>
                    <option value="month" name="seminar_month">April</option>
                    <option value="month" name="seminar_month">May</option>
                    <option value="month" name="seminar_month">June</option>
                    <option value="month" name="seminar_month">July</option>
                    <option value="month" name="seminar_month">August</option>
                    <option value="month" name="seminar_month">September</option>
                    <option value="month" name="seminar_month">October</option>
                    <option value="month" name="seminar_month">November</option>
                    <option value="month" name="seminar_month">December</option>
                </select>
            </div>

            <div class="form-group">
                <label>Supervisor's Name:</label>
                <select class="form-control" name="supervisor_name">
                    <option value="selectname" name="supervisor_name"  selected>Select Supervisor's Name</option>

                    <option value="name" name="supervisor_name">NO</option>
                    <option value="name" name="supervisor_name">1</option>
                    <option value="name" name="supervisor_name">2</option>
                    <option value="name" name="supervisor_name">3</option>
                    <option value="name" name="supervisor_name">4</option>
                    <option value="name" name="supervisor_name">5</option>
                </select>
            </div>

            <button class="btn btn-success btn-block" name="submit_form">Submit</button>
        </form>
    </div>
</div>


<?php require ('footer.php');?>
