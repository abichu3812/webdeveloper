<?php
session_start();
    if(isset($_POST['submit']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbDatabase = "payroll";
        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbDatabase);
        print_r($_POST);
        $id = $_POST['id'];
        $noofdays= $_POST['noofdays'];
        $applydate = $_POST['applydate'];
        $fromdate= $_POST['fromdate'];
        $todate = $_POST['todate'];
        $leavetype= $_POST['leavetype'];
        $reason = $_POST['reason'];


        $sql = "insert into apply_leave(`id`, `noofdays`, `applydate`, `fromdate`, `todate`, `leavetype`, `reason`) values($id,$noofdays,'$applydate','$fromdate','$todate','$leavetype','$reason')";
          if(mysqli_query($conn, $sql))
          {
              echo "Records inserted successfully.";
              header("Location: adminhome.php");
          }
          else{
              echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
      }
 ?>
<?php include 'adminbase.php';
?>

<html>
<head>
    <title>LEAVE APPLICATION FORM</title>
    <style>    
*{
    margin:2px;
    padding:2px;
  }
  
  body{
    background: white;
    background-repeat: no-repeat;
    font-family: sans-serif;
  }
  h1
  {
    color: white;
    text-shadow: 5px 5px 5px darkblue;
    text-align: center;
    }
  .reg
  {
      width:35%;
      margin:auto;
      background-color: burlywood;
      padding:10px;
      border-radius: 6%;
  }
  
  label{
    color: white;
    text-shadow: 2px 2px 2px #000000;
  }
  
  input{
    opacity: 0.9;
    height: 30px;
  }
  select{
    opacity: 0.7;
    height: 30px;
  }
  #submit{
      outline: 2;
      padding: 3%;
      height: 9%;
      border: 2px solid black;
      background: #1c8adb;
      font-size: 20px;
      border-radius: 10px;
      margin-left: 20%;

  }
  
  #submit:hover{
    cursor: pointer;
    background: #26CDEE;
  }
  


    </style>
</head>
<body>
    <ul style="margin:0px;padding:0px;list-style: none">
         <li><a href="emphome.html"></a></li>
    </ul>
    <div class="reg">
        <form action="apply-leave.php" method="POST">
        <h1>APPLY LEAVE</h1><br>
        <label><b>Employee ID: </b></label>
            <input type="text" name="id" placeholder=" Employee ID" required><br><br>
        <label><b>NO OF  DAYS: </b></label>
            <input type="text" name="noofdays" placeholder=" No of days" required><br><br>
        <label><b>Application Date:</b></label>
            <input type="date" name="applydate" placeholder="Date Applied" required><br><br>
        <label><b>FROM THIS DATE: </b></label>
            <input type="date" name="fromdate" placeholder="Fromdate" required><br><br>
        <label><b>UPTO THIS DATE: </b></label>
            <input type="date" name="todate" placeholder="Todate" required><br><br>
        <label><b>Leave Type :</b></label>
            <select name="leavetype" required>
                <option>---</option>
                <option value="annual leave">Annual Leave</option>
                <option value="pay off">Pay Off</option>
            </select><br><br>
        <label><b>Reason Type:</b></label>
            <select name="reason" required>
                <option>---</option>
                <option value="sick leave">Sick Leave</option>
                <option value="personal leave">Personal Leave</option>
                <option value="vacation leave">Vacation Leave</option>
                <option value="emergency">Emergency</option>
            </select><br><br>
        <button type="submit" name="submit" id="submit"><b>APPLY</b></button>
    </form>
</div>
</body>
</html>