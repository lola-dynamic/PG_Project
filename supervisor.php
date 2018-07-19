

<?php
session_start();
require ('connect.php');

if (isset($_POST['submit'])) {


    // to store supervisors details on the database
    $sql = "INSERT INTO Students (name, email) VALUES ('dr aina',  'abigailomlola1@gmail.com')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);


}

?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron text-center">
    <div class="container">
        <h3>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING<br> OBAFEMI AWOLOWO UNIVERSITY, ILE-IFE, NIGERIA<br>
            POSTGRADUATE SEMINAR FORM</h3>
    </div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="container">
        <p> PLEASE FILL IN THE CONFIRMATION FORM BELOW.<span class="fa fa-2x fa-pencil"></span></div></p>
    <form class="" method="post" enctype="" action="">

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
            <label>Tick the box for Candidate Approval:&nbsp</label>
            <input type="checkbox" class="" name="seminar_type" value="Yes">YES&nbsp&nbsp
            <input type="checkbox" class="" name="seminar_type" value="No">NO
        </div>

        <div class="form-group">
            <label>Date:</label>
            <input type="datetime-local" class="form-control" required placeholder="date">
        </div>

        <div class="form-group">
            <label>Comment on candidate readiness:</label>
            <textarea class="form-control" name="text" placeholder="Comment"></textarea>
        </div>

        <div class="form-group">
            <label>Confirm The Candidate Leave Of Absence:&nbsp</label>
            <input type="checkbox" class="" name="seminar_type" value="Yes">YES&nbsp&nbsp
            <input type="checkbox" class="" name="seminar_type" value="No">NO
        </div>

        <div><button type="submit" class="btn btn-success form-group" name="submit">Submit</button></div>
    </form>
</div>



    <?php require ('footer.php');?>





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

