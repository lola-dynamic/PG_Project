<?php include "$_SERVER[DOCUMENT_ROOT]/pg_project/includes/layout/admin-header.php";?>
<main>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="">Dashboard</li>
                <li class="active">Candidates</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Prioritized List </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="dataTables_wrapper form-inline dt-bootstrap"  style="overflow-x: auto">

                        <div class="col-md-offset-8 col-md-4 col-sm-7 col-xs-7 m-b-30">
                            <div class="m-b-30">
                                <a href="email.php">
                                    <button name="send-mail-to-supervisor" class="btn btn-primary pull-right" >Send Mail to supervisors</button>
                                </a>






                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTables" role="grid" aria-describedby="example1_info">
                                    <thead>
                                    <tr role="row">
                                        <th>Email</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Degree</th>
                                        <th>Number of Semester</th>
                                        <th>Supervisor Name</th>
                                        <th>Seminar Type</th>
                                        <th>Necessary Doc</th>
                                        <th>Project Title</th>
                                        <th>Registration Number</th>
                                        <th>Prioritize</th>
                                        <th>Schedule</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    if ($forms_table->num_rows > 0) {
                                        while($user = $forms_table->fetch_assoc()) {
                                            $status = '';
                                            if (($user['no_of_semester'] >= 5) && ($user['scheduled_for_seminar'] == 0)) {
                                                $status = '
                                                <form method="post" action="add.php">
<input type="hidden" name="reg_number" value="'.$user['reg_number'].'">
   <button class="btn btn-danger" type="submit" name="prioritize-candidate">Prioritize</button>
</form>
                                                
                                                ';
                                            } else {
                                                $status = "";
                                            }


                                            $scheduled = '';
                                            if ($user['scheduled_for_seminar'] == 1) {
                                                $scheduled = '
                                                <form method="post" action="add.php">
                                            <input type="hidden" name="reg_number" value="'.$user['reg_number'].'">
                                                 <button class="btn btn-danger" type="submit" name="unschedule-candidate"><span class="fa fa-edit"></span>Unschedule</button>
                                                </form>
                                                      
                                                                                                          
                                               ';
                                            } else {
                                                $scheduled = '
<form method="post" action="add.php">
<input type="hidden" name="reg_number" value="'.$user['reg_number'].'">
   <button class="btn btn-success" type="submit" name="schedule-candidate"><span class="fa fa-edit"></span>Schedule</button>
</form>
                                                      
                                                                                                          
                                                       ';
                                            }

                                            $document = '';
                                            if($user['document']){
                                                $document = '<a href="./necessaryDocuments/'.$user['document'].' " target="_blank">download document</a>';
                                            }


                                            echo (
                                                '<tr role="row" class="odd">'.
                                                '<td>'.$user['email'].'</td>'.
                                                '<td>'.$user['first_name'].'</td>'.
                                                '<td>'.$user['last_name'].'</td>'.
                                                '<td>'.$user['degree_study'].'</td>'.
                                                '<td>'.$user['no_of_semester'].'</td>'.
                                                '<td>'.$user['supervisor_name'].'</td>'.
                                                '<td>'.$user['seminar_type'].'</td>'.
                                                '<td>'.$document.'</td>'.
                                                '<td>'.$user['project_title'].'</td>'.
                                                '<td>'.$user['reg_number'].'</td>'.
//                                                '<td>'.$user['seminar_month'].'</td>'.
                                                '<td>'.$status.'</td>'.
                                                '<td>'.$scheduled.'</td>'.

                                                '</tr>'
                                            );
                                        }
                                    }
                                    ?>


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <h3>Set venue and time to generate PG seminar notice</h3>
                        <form method="post" action="./utility/pdf/generate_pdf.php">
                            <div>
                                Time: <input type="time" placeholder="Seminar time" name="seminar_time"/><br>
                                Date: <input type="date" placeholder="Seminar date" name="seminar_date"/><br>
                                Venue: <input type="text" placeholder="Venue" name="seminar_venue"/>
                            </div>

                            <input type="submit" class="btn btn-success" name="generate_pdf" value="Generate PDF"/>
                        </form>
                    </div>
                </div>


            </div>
        </section>
    </div>

</main>

<?php include "$_SERVER[DOCUMENT_ROOT]/pg_project/includes/layout/admin-footer.php";?>