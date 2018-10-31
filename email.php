
<?php include "$_SERVER[DOCUMENT_ROOT]/pg_project/includes/layout/admin-header.php";

ob_start();

$table_loop = '';
$index = 1;
while($row=$scheduled_table->fetch_assoc())
{
    $full_name = $row['first_name'].' '.$row['last_name'];
    $table_loop .= <<<EOD
  
      <tr>
          <td>{$index}</td>
          <td>{$full_name}</td>
          <td>{$row['project_title']}</td>
          <td>{$row['degree_study']}</td>
          <td>{$row['supervisor_name']}</td>
      </tr>
      
EOD;
    $index++;
}



if(isset($_POST['send_mail'])){

    while($row=$supervisors_table->fetch_assoc())
    {
        $email = $row['supervisor_email'];

        $service = new Services();
        $message_student = '
        <p>Dear all, </p><br/>
        <p>On behalf of the department, you are cordially invited to the postgraduate seminar presentation of the following candidates:
</p>

<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td>S/N</td>
        <td>Name</td>
        <td>Seminar Title</td>
        <td>Degree</td>
        <td>Supervisor</td>

    </tr>
    
    '.$table_loop.'
</table>


<div>
<p><strong>Venue</strong>: '.$_POST["venue"].'</p>
<br/>
<p><strong>Date</strong>: '.$_POST["date"].'</p>
<br/>
<p><strong>Time</strong>: '.$_POST["time"].'</p>

Thanks for participating
</div>
        ';

        $service->sendPgSeminarNotice2Supervisor($email, $message_student);

        echo("<script>location.href = 'prioritize.php';</script>");
    }

}

?>


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
                <li class="active">Send email form</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"> Send Email </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <form class="form-vertical" method="post" action="">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="time"> Time </label>
                                    <input type="time" class="form-control" required name="time">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" required name="date">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="venue">Venue</label>
                                    <input type="text" class="form-control" required name="venue">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success" name="send_mail">Send Mail</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
ob_end_flush();
<?php include "$_SERVER[DOCUMENT_ROOT]/pg_project/includes/layout/admin-footer.php"; ?>
