<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 23/09/2018
 * Time: 4:06 AM
 */

require ('connect.php');
include('./utility/Services.php');

$database = new Database();
$service = new Services();

if(isset($_POST['schedule-candidate'])) {
    $reg_number = $_POST['reg_number'];
    $scheduled = 1;

    // check if student has already been added
    $form_table  = $mysqli->query("SELECT * FROM form WHERE reg_number='$reg_number' AND scheduled_for_seminar = 1");

    if($form_table->num_rows >= 1){
        echo 'Candidate has already been scheduled';
    }else {
        $schedule_candidate = $database->addScheduledCandidate($reg_number);
        if($schedule_candidate) {
            header("Location: prioritize.php");
        }
    }



}

if(isset($_POST['unschedule-candidate'])) {
    $reg_number = $_POST['reg_number'];

    // check if student has already been added
    $form_table  = $mysqli->query("SELECT * FROM form WHERE reg_number='$reg_number' AND scheduled_for_seminar = 0");

    if($form_table->num_rows >= 1){
        echo 'Candidate has not been scheduled';
    }else {
        $unschedule_candidate = $database->removeScheduledCandidate($reg_number);
        if($unschedule_candidate) {
            $service = new Services();
            $message_student = "<p>This is notity you that your seminar has been cancelled</p>";

            $service->sendEmailToRemovedStudent($_POST['email'], $message_student);
            header("Location: prioritize.php");
        }
    }

}

if(isset($_POST['prioritize-candidate'])){
    $reg_number = $_POST['reg_number'];

    $schedule_candidate = $database->addScheduledCandidate($reg_number);
    if($schedule_candidate) {
        header("Location: prioritize.php");
    }
}

if(isset($_POST['send-mail-to-supervisor'])){
    $reg_number = $_POST['reg_number'];

    $student = $database->fetchFormByRegNumber($reg_number);

    if($student) {
        $full_name = $student['first_name'].' '.$student['last_name'];
        $seminar_title = $student['seminar_title'];
        $degree = $student['degree_study'];
        $supervisor_name = $student['supervisor_name'];
        $venue = $_POST['venue'];
        $date = $_POST['date'];
        $time = $_POST['time'];
    }
}


