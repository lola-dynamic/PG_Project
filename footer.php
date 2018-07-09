

<div class="footer">
    <div class="row">
        <div class ="col-md-4"><p>Examination Time Table<br>Contact Us</br><br>Student Help</br><br>Staff Help</b></p></div>
        <div class="col-md-4"><p>Privacy Statement<br>Term And Condition of Use</br><br>Legal Notice</br><br>FAQS</br><br>Lecture Time Table</br></p>
        </div>
        <div class= "col-md-4"> <img src="images/remita-payment-logo-vertical.png"> </div>
    </div>
    <div class="bottom"><p>&copy2017- 2018 Obafemi Awolowo University</p>
    </div>
</div>


<script>
    function myFunction() {
        var form;
        var name = prompt("Please enter your name:");
        var regno = prompt("enter your registration no:");
        var password = prompt("enter your password:");

        if (name == null || name == "" && regno == null || regno == "" && password == null || password == "") {
            alert("You have not fill up the fields");
        } else {
            form = "Hello" + name + ",You are welcome to seminar page!";
        }
        document.getElementById("demo").innerHTML = form;
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
