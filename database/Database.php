<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 17/09/2018
 * Time: 4:18 AM
 */

class Database
{
    private $link;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host = 'localhost', $username = 'root', $password = '', $database = 'pg_project')
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->link = new mysqli($this->host, $this->username, $this->password, $this->database);
    }

    public function fetchAllStudent()
    {
        $users = $this->link->query("SELECT * FROM users");
        return $users;
    }

    public function fetchAllForms()
    {
        $forms = $this->link->query("SELECT * FROM form");
        return $forms;
    }

    public function fetchAllApprovedForms()
    {
        $approved = $this->link->query("SELECT * FROM form WHERE approved = 1");
        return $approved;
    }

    public function fetchAllLectures()
    {
        $supervisors = $this->link->query("SELECT * FROM supervisors");
        return $supervisors;
    }

    public function fetchAllPrioritizedForms()
    {
        $approved = $this->link->query("SELECT * FROM prioritize");
        return $approved;
    }

    public function fetchAllPrioritizedFormsScheduled()
    {
        $approved = $this->link->query("SELECT * FROM form WHERE scheduled_for_seminar = 1");
        return $approved;
    }

    public function fetchAllPrioritizedFormsNotScheduled()
    {
        $approved = $this->link->query("SELECT * FROM form WHERE scheduled_for_seminar = 0");
        return $approved;
    }

    public function fetchAllUnApprovedForms()
    {
        $un_approved = $this->link->query("SELECT * FROM form WHERE approved is NULL or approved = 0");
        return $un_approved;
    }

    public function fetchFormByRegNumber($reg_number)
    {
        $student = $this->link->query("SELECT * FROM form WHERE form.reg_number = '$reg_number'");
        return $student;
    }

    public function saveConfiguration($semester)
    {
        $config = $this->link->query("INSERT INTO configuration(semester) VALUES ('$semester')");

        return $config;
    }

    public function getCurrentSemester()
    {
        $admin_current_semester = $this->link->query("SELECT * FROM configuration ORDER BY ID DESC LIMIT 1");

        $semester = '';
        $num_rows = mysqli_num_rows($admin_current_semester);
        if ($admin_current_semester->num_rows > 0) {
            $sup = $admin_current_semester->fetch_assoc();
            $semester = $sup['semester'];
        }
        return $semester;
    }

    public function updateStudentSemester($semester, $reg_number)
    {
        $student_semester = $this->link->query("UPDATE users SET no_of_semester ='$semester' WHERE reg_number ='$reg_number'");
//
        return $student_semester;
    }

    public function updateFormSemester($semester, $reg_number)
    {
        $reg_number = (int)$reg_number;
        $student_semester = $this->link->query("UPDATE form SET no_of_semester ='$semester' WHERE reg_number ='$reg_number'");
//
        return $student_semester;
    }


    public function removeScheduledCandidate($reg_number)
    {
        $candidate = $this->link->query("UPDATE form SET scheduled_for_seminar = 0 WHERE reg_number ='$reg_number'");
//
        return $candidate;
    }

    public function addScheduledCandidate($reg_number)
    {
        $candidate = $this->link->query("UPDATE form SET scheduled_for_seminar = 1 WHERE reg_number ='$reg_number'");
//
        return $candidate;
    }


//    public function showAllCandidate()
//    {
//        $candidates = $this->link->query("SELECT * FROM")
//    }
}