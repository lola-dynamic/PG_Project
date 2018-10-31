<?php
/**
 * Created by PhpStorm.
 * User: Abigail
 * Date: 10/30/2018
 * Time: 4:54 PM
 */

// Include the main TCPDF library (search for installation path).
require_once('../../vendor/tcpdf/tcpdf.php');
//require_once('./config/tcpdf_config_alt.php');


require ('../../connect.php');
include('../../database/Database.php');

$database = new Database();
$scheduled_table = $database->fetchAllPrioritizedFormsScheduled();



// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator('PG Seminar');
$pdf->SetTitle('PG Seminar Notice');
$pdf->SetSubject('OBAFEMI AWOLOWO UNIVERSITY');


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 15);

// add a page
$pdf->AddPage();



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






$tbl = <<<EOD
<div style="text-align: center">
<img src="../../images/oaulogo.png" style="width: 35px; height: 35px;"/>
<h4>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h4>
<h5>OBAFEMI AWOLOWO UNIVERSITY, ILE-IFE, NIGERIA</h5>
<h6>POSTGRADUATE SEMINAR</h6>
</div>


<p>Dear all,</p>
<br/>
<p>
On behalf of the department, you are cordially invited to the postgraduate seminar presentation of the following candidates:
</p>

<br/>
<br/>

<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td>S/N</td>
        <td>Name</td>
        <td>Seminar Title</td>
        <td>Degree</td>
        <td>Supervisor</td>

    </tr>
    
    {$table_loop}
</table>

<div>
<p><strong>Venue</strong>: {$_POST['seminar_venue']}</p>
<br/>
<p><strong>Date</strong>: {$_POST['seminar_date']}</p>
<br/>
<p><strong>Time</strong>: {$_POST['seminar_time']}</p>

Thanks for participating
</div>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

//Close and output PDF document
$pdf->Output('PG_Seminar', 'I');

//============================================================+
// END OF FILE
//============================================================+
