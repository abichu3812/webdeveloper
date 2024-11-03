
<?php
 if(isset($_POST['submit']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbDatabase = "payroll";
        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbDatabase);

          $id = $_POST['id'];
          $monthlyallow = $_POST['monthlyallow'];
          $basic_pay = $_POST['basic_pay'];
          $ca = $_POST['ca'];
          $food_allow = $_POST['foodallow'];
          $bonus = $_POST['bonus'];
          $provisional= $_POST['provisional'];
          $provident = $_POST['provident'];
          $insurance= $_POST['insurance'];
          $total_earning=$monthlyallow+$basic_pay+$ca+$food_allow+$bonus;
          $deductions=$provisional+$provident+$insurance;
          $netpay=$total_earning- $deductions;
          $sql = "insert into salary(`id`, `monthlyallow`, `basic_pay`, `ca`, `food_allow`, `bonus`, `provisional`, `provident`, `insurance`,`total_earning`,`deductions`,`netpay`) values ($id,$monthlyallow,$basic_pay,$ca,$food_allow,$bonus,$provisional, $provident,$insurance,$total_earning,$deductions,$netpay)";
          if(mysqli_query($conn, $sql))
          {
              echo "Records inserted successfully.";
              header("Location: adminhome.php");
          }
          else
          {
            echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
          }
      }
 ?>
<?php include 'adminbase.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PAY SLIP</title>
		<link rel="stylesheet" type="text/css" href="aboutus.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="salaryslip.css">
    <style>

*{
    margin:2px;
    padding:2px;
}
/*
body{
    background-image: url(pays.png);
    background-repeat: no-repeat;
    background-size: cover;
    font-family: sans-serif;
}*/

h2{
    color: white;
    text-align: center;
    text-shadow: 1px 0px 5px black;

}
h4
{
    color: white;
    text-align: center;
    text-shadow: 1px 0px 5px black;
 }
 .reg
 {
     width:35%;
     margin:auto;
     opacity: 0.9;
     background-color: rgb(0,0,0,0.8);
     padding:10px;
 }
 label{
   color: white;
   text-shadow: 2px 2px 2px #000000;
 }
 input{
   opacity: 0.6;
   height: 30px;
 }
 #submit{
     outline: 2;
     padding: 3%;
     height: 20%;
     border: 2px solid black;
     color: black;
     background-color: lightgrey;
     font-size: 20px;
     border-radius: 10px;
     margin-left: 20%;
 }

 #submit:hover{
   cursor: pointer;
   background:darkorange;
   color: #000;
 }
 .ul{
   margin:0px;
   padding:0px;
   list-style: none" 
 }


    </style>
  </head>
  <body>
    <div class="reg">
        <form action="salaryslip.php" method="POST" >
              <h2>ENTER THE SALARY DETAILS</h2><br>
                <label><b>Employee. ID: </b></label>
                    <input type="text" name="id" placeholder="Emp ID"required ><br><br>
              <h4><u>EARNINGS</u></h4>
                  <label><b>Month Allowance: </b></label>
                        <input type="text" name="monthlyallow" placeholder="Monthly Allowance"required><br><br>
                    <label><b>Basicmoney Pay: </b></label>
                        <input type="text" name="basic_pay" placeholder=" Basic Pay"required ><br><br>
                    <label><b>Con. Allowance:</b></label>
                        <input type="text" name="ca" placeholder="Conveyance Allowance" required><br><br>
                    <label> <b>Food Allowance:</b></label>
                        <input type="text" name="foodallow" placeholder="Food Allowance" required><br><br>
                    <label><b>Bonus Earnings:</b></label>
                        <input type="text" name="bonus" placeholder=" bonus" required><br><br>

            <h4><u>DEDUCTIONS</u></h4>
                    <label><b>Provisional Tax:</b></label>
                        <input type="text" name="provisional" placeholder=" enter provisional"required ><br><br>
                    <label><b>Provident Fund:</b></label>
                        <input type="text" name="provident" placeholder="enter provident" required><br><br>
                    <label><b>Insurance DED.:</b></label>
                        <input type="text" name="insurance" placeholder=" enter insurance" required><br><br>

            <button type="submit" name="submit" id="submit"><b>Submit</b></button>

        </form>
    </div>
  </body>
</html>
