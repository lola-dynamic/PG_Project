<?php 
include('header.php'); 

if(isset($_POST['submit']) && $_POST['submit'] == 'register') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $reg_number = $_POST['reg_number'];
    $email = $_POST['email'];

    // Validate input fields

    if(empty($name)) {
        $error = "Please enter your full name";
    }

    // check if there is no validation error

    if ($error == "") {

        // generate student's ID
        $studentId = "OAU".mt_rand(5,10000);
        // insert into the database
        $sql = "INSERT INTO users(name, username, reg_number,email, student_id) VALUES('$name', '$username', '$reg_number', '$email', '$studentId')";

        if(!mysqli_query($mysqli, $sql)) {
            echo ("Error Description: ".mysqli_error($mysqli));
        } else {
            header("Location: http://abby.local/profile.php");
        }
    }

}
?>



<div class="content-wrapper">
    <div class="row">
        <form class="form-vertical" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Your full name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your full name" id="name">
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
                    <label for="reg_number">Registration Number</label>
                    <input type="text" class="form-control" name="reg_number" placeholder="Enter your registration number" id="reg_number">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email address" id="email">
                </div>
            </div>

            <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success" value="register">
            
            </div>
        </form>
    </div>
</div>

<?php include('footer.php') ?>
