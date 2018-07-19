<?php 
include('header.php');

//session_start();
require ('connect.php');

if(isset($_POST['register'])) {
    $reg_number = $_POST['reg_number'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Validate input fields

    $result = $mysqli->query("SELECT * FROM users WHERE reg_number='$reg_number'");
    $num_rows = mysqli_num_rows($result);

    if ($result->num_rows > 0) {

        $_SESSION['message'] = "User with this registration number already exists!";
    }else{

        // generate student's ID
        $studentId = "OAU".mt_rand(5,10000);
//        $hash = $mysqli->escape_string( md5( rand(0,1000) ) );
        // insert into the database
        $sql = "INSERT INTO users(reg_number, username, email, student_id) VALUES('$reg_number', '$username', '$email', '$studentId')";

        $_SESSION['active'] = 1;
        $_SESSION['logged_in'] = true; // So we know the user has logged in

        if(!mysqli_query($mysqli, $sql)) {
            echo ("Error Description: ".mysqli_error($mysqli));
        } else {
            $_SESSION['message'] = "registration was successful";
            header("Location: seminar_form.php");


        }
    }

}
?>

<?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; } ?>
<div class="content-wrapper">
    <h3>Fill in your details</h3>
    <div class="row">
        <form class="form-vertical" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="reg_number">Registration Number</label>
                    <input type="text" class="form-control" name="reg_number" placeholder="Enter your registration number" id="reg_number">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter your username" id="username">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email address" id="email">
                </div>
            </div>

            <div class="form-group">
                <div><button type="submit" class="btn btn-success form-group" name="register">Register</button></div>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php') ?>
