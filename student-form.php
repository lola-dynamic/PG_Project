<?php include "$_SERVER[DOCUMENT_ROOT]/pg_project/includes/layout/admin-header.php"; ?>

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
                    <li class="active">Student Form</li>
                </ol>
            </section>


            <!-- Main content -->
            <section class="content">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> All student Forms </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="dataTables_wrapper form-inline dt-bootstrap">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTables"
                                           role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th>No</th>
                                            <th> Registration Number</th>
                                            <th> First Name</th>
                                            <th> Last Name</th>
                                            <th> Degree Study</th>
                                            <th> Leave of Absence</th>
                                            <th> Phone Number</th>
                                            <th> Seminar Month</th>
                                            <th> Project Title</th>


                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php
                                        if ($forms_table->num_rows > 0) {
                                            while ($user = $forms_table->fetch_assoc()) {
                                                echo(
                                                    '<tr role="row" class="odd">' .
                                                    '<td class="sorting_1"></td>' .
                                                    '<td>' . $user['reg_number'] . '</td>' .
                                                    '<td>' . $user['first_name'] . '</td>' .
                                                    '<td>' . $user['last_name'] . '</td>' .
                                                    '<td>' . $user['degree_study'] . '</td>' .
                                                    '<td>'.$user['leave_absence'].'</td>'.
                                                    '<td>' . $user['phone_no'] . '</td>' .
                                                    '<td>' . $user['seminar_month'] . '</td>' .
                                                    '<td>' . $user['project_title'] . '</td>' .
                                                    '<td>  </td>' .
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
                    </div>
                </div>
            </section>
        </div>

    </main>

<?php include "$_SERVER[DOCUMENT_ROOT]/pg_project/includes/layout/admin-footer.php"; ?>