<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 23/09/2018
 * Time: 4:06 AM
 */

require ('connect.php');


if(isset($_POST['add-candidate'])) {
    $reg_number = $_POST['reg_number'];
    $scheduled = 1;

    // check if student has already being added
    $prioritize_table  = $mysqli->query("SELECT * FROM prioritize WHERE reg_number='$reg_number' AND scheduled_for_seminar = 1");

    if($prioritize_table->num_rows >= 1){
        echo 'Candidate has already being prioritized';
    }else {
        $student_table  = $mysqli->query("SELECT * FROM form WHERE reg_number='$reg_number'");
        if($student_table->num_rows == 1 ){
            while ($student = $student_table->fetch_assoc()){
                $email = $student['email'];
                $first_name = $student['first_name'];
                $last_name = $student['last_name'];
                $no_of_semester = (int)$student['no_of_semester'];
                $degree = $student['degree_study'];
                $seminar_type = $student['seminar_type'];
                $supervisor_name = $student['supervisor_name'];
                $necessary_doc = $student['document'];
                $project_title = $student['project_title'];
                $sql = "INSERT INTO prioritize(email, first_name, last_name,no_of_semester, reg_number,
 scheduled_for_seminar, degree, seminar_type, supervisor_name, necessary_doc, project_title)
                VALUES('$email','$first_name', '$last_name', '$no_of_semester', '$reg_number', 
                '$scheduled', '$degree', '$seminar_type', '$supervisor_name', '$necessary_doc', '$project_title')";


                if(!mysqli_query($mysqli, $sql)) {
                    echo ("Error Description: ".mysqli_error($mysqli));
                } else {
                    header("Location: prioritize.php");
                }
            }
        }
    }



}


if(isset($_POST['schedule-candidate'])) {
    $reg_number = $_POST['candidate-number'];
    $scheduled = 1;

    $sql = "UPDATE prioritize SET scheduled_for_seminar ='$scheduled' WHERE reg_number ='$reg_number'";


    if(!mysqli_query($mysqli, $sql)) {
        echo ("Error Description: ".mysqli_error($mysqli));
    } else {
        header("Location: scheduled.php");
    }
}
