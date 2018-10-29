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
                    <li class="active"> Candidates </li>
                </ol>
            </section>


            <!-- Main content -->
            <section class="content">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> All candidates </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="dataTables_wrapper form-inline dt-bootstrap">

                            <div class="col-md-offset-8 col-md-4 col-sm-7 col-xs-7 m-b-30">
                                <div class="m-b-30">
                                    <a href="prioritize.php">
                                        <button class="btn btn-primary pull-right"> Prioritize List </button>
                                    </a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTables" role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Degree</th>
                                            <th>Seminar Type</th>
                                            <th>Supervisor Name</th>
                                            <th>Necessary Doc</th>
                                            <th>Project Title</th>
                                            <th>Registration Number</th>
                                            <th>Date</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php
                                            if ($forms_table->num_rows > 0) {
                                                while($user = $forms_table->fetch_assoc()) {
                                                    echo (
                                                        '<tr role="row" class="odd">'.
                                                        '<td class="sorting_1"></td>'.
                                                        '<td>'.$user['email'].'</td>'.
                                                        '<td>'.$user['first_name'].'</td>'.
                                                        '<td>'.$user['last_name'].'</td>'.
                                                        '<td>'.$user['degree_study'].'</td>'.
                                                        '<td>'.$user['seminar_type'].'</td>'.
                                                        '<td>'.$user['supervisor_name'].'</td>'.
                                                        '<td>'.$user['document'].'</td>'.
                                                        '<td>'.$user['project_title'].'</td>'.
                                                        '<td>'.$user['reg_number'].'</td>'.
                                                        '<td>'.$user['seminar_month'].'</td>'.
                                                        '<td>
                                                            <form method="post" action="add.php">
                                                            <input type="hidden" name="reg_number" value="'.$user['reg_number'].'">
                                                               <button class="btn btn-success" type="submit" name="add-candidate"><span class="fa fa-edit"></span>Prioritize</button>
                                                            </form>
                                                                            
                                                        </td>'
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

<?php include "$_SERVER[DOCUMENT_ROOT]/pg_project/includes/layout/admin-footer.php";?>