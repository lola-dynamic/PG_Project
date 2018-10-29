<?php
require ('header.php');

//if (isset($_POST['submit_form'])) {
//
//}

?>

<style type="text/css">
    h2{
        text-align: center;
    }
    .header{
        background-color: #000000;
    }
    table{
        color: #ffffff;
        border-collapse: collapse;
        width: 50%;
    }

    tr{
        border: 15px solid #ffffff;
        text-align: left;
        padding: 30px;
    }

    .left-side th{
        background-color:#00a651;

    }


    td{
        background-color: #00a651;
        border: 15px solid #ffffff;
        text-align: center;
        padding: 30px;
        font-size: 25px;
        font-weight: bold;
    }

    th{
        border: 15px solid #ffffff;
        text-align: left;
        padding: 50px;
        font-size: 30px;
    }
    .left-side th:hover{
        background-color:#96d26b;
        box-shadow: 10px 10px 12px 18px rgba(0,0,1,0.2);
    }

    td:hover {
        background: #e75155;
        box-shadow: 10px 10px 12px 18px rgba(0,0,1,0.2);
    }

</style>




<!--body of the profile page display here-->
<div class="contact_us" style="width: 70%; height:70%; margin: 0 auto; margin-top: 50px">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="images/Dr-Olajubu-300x300.jpg" alt="Card image">
                <div class="card-body">
                    <h2 class="card-title" style="text-align:left">Dr E.A Olajubu</h2>
                    <h4 class="card-title">emmolajubu@oauife.edu.ng</h4>
                    <h4 class="card-title">Head of Department</h4>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="images/Awoyelu.jpg" alt="Card image" style="height: 300px; width: 300px">
                <div class="card-body">
                    <h2 class="card-title" style="text-align:left">Dr (Mrs)I.O Awoyelu</h2>
                    <h4 class="card-title">iawoyelu@oauife.edu.ng</h4>
                    <h4 class="card-title">PG Coordinator</h4>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="images/dr-s.aina.jpg" alt="Card image" style="height: 300px; width: 300px">
                <div class="card-body">
                    <h2 class="card-title" style="text-align:left">Dr S. Aina</h2>
                    <h4 class="card-title">s.aina@oauife.edu.ng</h4>
                    <h4 class="card-title">Seminar Coordinator</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table" style="width: 70%; margin: 0 auto; margin-top: 50px">
    <h2>POSTGRADUATE TUTORS DETAILS</h2>
    <table class="hovertable">
        <tr class="header">
            <th>s/n</th>
            <th>Names</th>
            <th>Designation</th>
            <th>E-mail Address</th>
        </tr>

        <hr>
        <tr class="left-side">
            <th>1</th>
            <td>Dr. E.A. Olajubu</td>
            <td>Senior Lecturer & HOD</td>
            <td>emmolajubu@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>2</th>
            <td>Prof. E.R. Adagunodo</td>
            <td> Professor</td>
            <td>eadagun@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>3</th>
            <td>Prof. G.A. Aderounmu</td>
            <td>Professor</td>
            <td>gaderoun@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>4</th>
            <td>Dr. (Mrs.) H.A. Soriyan</td>
            <td>Professor</td>
            <td>hsoriyan@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>5</th>
            <td>Dr. O.A. Odejobi</td>
            <td>Reader</td>
            <td>oodejobi@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>6</th>
            <td>Dr. A.O. Oluwatope</td>
            <td>Reader</td>
            <td>aoluwato@oauife.edu.ng <br>
                oluwatopeayodeji@hotmail.com</td>
        </tr>

        <tr  class="left-side">
            <th>7</th>
            <td>Dr. A.I. Oluwaranti</td>
            <td>Senior Lecturer</td>
            <td>aranti@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>8</th>
            <td>Dr. B.S. Afolabi</td>
            <td>Senior Lecturer</td>
            <td>bafox@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>9</th>
            <td>Dr. A.O. Ajayi</td>
            <td>Senior Lecturer</td>
            <td>anuajayi@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>10</th>
            <td>Dr. (Mrs.) I.O. Awoyelu</td>
            <td>Senior Lecturer</td>
            <td>iawoyelu@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>11</th>
            <td>Dr. P.A. Idowu</td>
            <td>Senior Lecturer</td>
            <td>paidowu@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>12</th>
            <td>Dr. (Mrs.) S.A. Bello</td>
            <td>Senior Lecturer</td>
            <td>apinkebello@yahoo.com<br> sbello@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>13</th>
            <td>Dr. S.I.  Eludiora</td>
            <td>Lecturer I</td>
            <td>sieludiora@oauife.edu.ng<br> safiriyue@yahoo.com</td>
        </tr>

        <tr  class="left-side">
            <th>14</th>
            <td>Dr. (Mrs.) R.N.  Ikono</td>
            <td>Lecturer I</td>
            <td>rudo@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>15</th>
            <td>Dr. F.O.  Asahiah</td>
            <td>Lecturer I</td>
            <td>sobusola@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>16</th>
            <td>Dr. (Mrs.) A.R. Iyanda</td>
            <td>Lecturer I</td>
            <td>abiyanda@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>17</th>
            <td>Dr.(Mrs.) B.O. Akinyemi</td>
            <td>Lecturer I</td>
            <td>boddymama@gmail.com<br>
                bakinyemi@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>18</th>
            <td>Dr. L.A. Akanbi</td>
            <td>Lecturer I</td>
            <td>laakanbi@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>19</th>
            <td>Dr. K.C. Olufokunbi
            </td>
            <td>Lecturer I</td>
            <td>kdcfoks@yahoo.com</td>
        </tr>

        <tr  class="left-side">
            <th>20</th>
            <td>Dr. D.F. Ninan</td>
            <td>Lecturer I</td>
            <td>jninan@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>21</th>
            <td>Dr. B.I.  Akhigbe</td>
            <td>Lecturer I</td>
            <td>bakhigbe@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>22</th>
            <td>Dr. M.L. Sanni</td>
            <td>Lecturer I</td>
            <td>msanni1@yahoo.com</td>
        </tr>

        <tr  class="left-side">
            <th>23</th>
            <td>Dr. S. A. Aina</td>
            <td>Lecturer I</td>
            <td>Sba.aina@gmail.com<br> s.aina@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>24</th>
            <td>Dr. I.P. Gambo</td>
            <td>Lecturer II</td>
            <td>peni@oauife.edu.ng</td>
        </tr>

        <tr  class="left-side">
            <th>25</th>
            <td>Dr. (Miss) T.O. Omodunbi</td>
            <td>Lecturer II</td>
            <td>tessydunbi@yahoo.com</td>
        </tr>

        <tr  class="left-side">
            <th>26</th>
            <td>Dr. (Mrs) H.O.  Odukoya</td>
            <td>Assistant Lecturer</td>
            <td>olagun12@yahoo.com</td>
        </tr>




    </table>
</div>


<?php require ('footer.php');?>

