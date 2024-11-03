
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
    if($_POST['username']!="")
    {
        $newusername= $_POST['username'];
        $sql1 = "UPDATE employee SET username = '$newusername'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'username updated Successfully!';
    }

    if($_POST['fname']!="")
    {
        $newfname= $_POST['fname'];
        $sql1 = "UPDATE employee SET fname = '$newfname'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'fname updated Successfully!';
    }
    
    if($_POST['lname']!="")
    {
        $newlname= $_POST['lname'];
        $sql1 = "UPDATE employee SET lname = '$newlname'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'lname updated Successfully!';
    }

    if($_POST['mname']!="")
    {
        $newmname= $_POST['mname'];
        $sql1 = "UPDATE employee SET mname = '$newmname'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'mname updated Successfully!';
    }
    
    if($_POST['mfname']!="")
    {
        $newmfname= $_POST['mfname'];
        $sql1 = "UPDATE employee SET mfname = '$newmfname'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'mfname updated Successfully!';
    }

    if($_POST['address']!="")
    {
        $newaddress= $_POST['address'];
        $sql1 = "UPDATE employee SET address = '$newaddress' ";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'Address updated Successfully!';
    }

    if($_POST['gender']!="")
    {
        $newgender= $_POST['gender'];
        $sql1 = "UPDATE employee SET gender = '$newgender'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'gender updated Successfully!';
    }

    if($_POST['contact']!="")
    {
        $newcontact= $_POST['contact'];
        $sql2 = "UPDATE employee SET contact = '$newcontact' ";
        $result2=mysqli_query($conn,$sql2);
        if(!$result2)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo 'Contact updated Successfully!';
    }

    if($_POST['job_title']!="")
    {
        $newjob_title= $_POST['job_title'];
        $sql1 = "UPDATE employee SET job_title = '$newjob_title' ";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'job_title updated Successfully!';
    }

    if($_POST['city']!="")
    {
        $newcity= $_POST['city'];
        $sql1 = "UPDATE employee SET city = '$newcity' ";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'city updated Successfully!';
    }

    if($_POST['dob']!="")
    {
        $newdob= $_POST['dob'];
        $sql1 = "UPDATE employee SET dob = '$newdob'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'dob updated Successfully!';
    }

    if($_POST['email']!="")
    {
        $newemail= $_POST['email'];
        $sql1 = "UPDATE employee SET email = '$newemail'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'email updated Successfully!';
    }

    if($_POST['school']!="")
    {
        $newschool= $_POST['school'];
        $sql1 = "UPDATE employee SET school = '$newschool'";
        $result1=mysqli_query($conn,$sql1);
        if(!$result1)
        {
            die('Could not update data: '.mysqli_error($conn));

        }
        echo'school updated Successfully!';
    }
    if($_POST['password']!="")
    {
        $newpassword= $_POST['pwd'];
        $sql2 = "UPDATE employee SET pwd = '$newpassword',cpwd='$newpassword' ";
        $result2=mysqli_query($conn,$sql2);
        if(!$result2)
        {
            die('Could not update data: '.mysqli_error($conn));
        }
        echo 'Password updated Successfully!';
    }
    header("Location: adminhome.php");
    mysqli_close($conn);
}
?>


<html>
<head>
    <title>UPDATE DETAILS</title>
    <link rel="stylesheet" type="text/css" href="profile-update.css">
    <style>

    
body{
    background: url(pays.png);
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
        <form action="profile-update.php" method="POST">
            <label><b>ENTER EPM_ID</b></label>
            <input type="text" name="id" placeholder="Enter your new emp_id "required><br><br>
            <label><b>UPDATE USERNAME?</b></label>
            <input type="text" name="username" placeholder="Enter your new username "><br><br>
            <label><b>UPDATE FNAME?</b></label>
            <input type="text" name="fname" placeholder="Enter your new fname "><br><br>
            <label><b>UPDATE LNAME?</b></label>
            <input type="text" name="lname" placeholder="Enter your new lname "><br><br>
            <label><b>UPDATE MNAME?</b></label>
            <input type="text" name="mname" placeholder="Enter your new mname "><br><br>
            <label><b>UPDATE MfNAME?</b></label>
            <input type="text" name="mfname" placeholder="Enter your new mfname "><br><br>
            <label><b>UPDATE ADDRESS?</b></label>
            <input type="text" name="address" placeholder="Enter your new address"><br><br>
            <label><b>UPDATE CONTACT NUMBER?</b></label>
            <input type="text" name="contact" placeholder="Enter your new contact number "><br><br>
            <label><b>UPDATE JOB_TITLE?</b></label>
            <input type="text" name="job_title" placeholder="Enter your new job_title "><br><br>
            <label><b>UPDATE CITY?</b></label>
            <input type="text" name="city" placeholder="Enter your new city"><br><br>
            <label><b>UPDATE DATE OF BIRTH?</b></label>
            <input type="date" name="dob" placeholder="Enter your new dob "><br><br>
            <label><b>UPDATE EMAIL?</b></label>
            <input type="email" name="email" placeholder="Enter your new email "><br><br>
            <label><b>UPDATE SCHOOL?</b></label>
            <input type="text" name="school" placeholder="Enter your new school "><br><br>
            <label><b>CHANGE PASSWORD?</b></label>
            <input type="password" name="pwd" placeholder="Enter the new password"><br><br>
            <input type="password" name="cpwd" placeholder="Confirm Password"><br><br>
            <button type="submit" name="submit" id="submit">UPDATE</button>
        </form>
    </div>
</body>
</html>
