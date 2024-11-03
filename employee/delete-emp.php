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
    $id=$_SESSION['id'];
    if($_POST['dol']!="")
    {
        $newdol= $_POST['dol'];
        $sql1 = "UPDATE employee SET dol = '$newdol'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'dol updated Successfully!';
    }
    
    if($_POST['status']!="inactive")
    {
        $newstatus= $_POST['status'];
        $sql1 = "UPDATE employee SET status = 'inactive'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'status updated Successfully!';
    }
    header("Location: adminhome.php");
    mysqli_close($conn);
}

include 'adminbase.php';

?>


<html>
<head>
    <title>UPDATE DETAILS</title>
    <link rel="stylesheet" type="text/css" href="profile-update.css">
    <style>

    
body{
    background: white;
    background-repeat: no-repeat;
}

.change
{
    background-color: black;
    color: white;
    opacity: 0.8;
    border-collapse: collapse;
    margin: 25px 25px;
    padding:2%;
    width:30%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
center
{
    padding-top: 3%;
}

label
{
    text-shadow: 1px 1px 2px blue;
    text-decoration: underline;
    color: lightblue;
}

.change input
{
    border: none;
    border-bottom: 1px solid #fff;
    background: white;
    opacity: .9;
    outline: none;
    height: 35px;
    color: black;
    font-size: 15px;
    font-weight: bold;
    width: 70%;
    padding: 3%;
}
button{
    border: solid black;
    outline: none;
    height: 30px;
    background: #400860;
    color: black;
    font-size: 16px;
    border-radius: 5px;
    font-weight:bolder;
}

button:hover
{
    background:#0954c4;
}


    </style>
</head>
<body><center>
    <div class="change">
        <form action="delete-emp.php" method="POST">
            <label><b>ENTER EPM_ID</b></label>
            <input type="text" name="id" placeholder="Enter your new emp_id "required><br><br>
            <label><b>UPDATE dol?</b></label></br>
            <input type="date" name="dol" placeholder="Enter your new dol "><br><br>
            <button type="submit" name="submit" id="submit">UPDATE</button>
        </form>
    </div>
</body>
</html>
