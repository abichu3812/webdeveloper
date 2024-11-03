<?php
include 'adminbase.php';

if(isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbDatabase = "payroll";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbDatabase);

    $title1 = $_POST['title1'];

    // Check if the employee exists
    $checkSql = "SELECT * FROM advert WHERE title= '$title1'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        // Employee found, proceed with deletion
        $sql = "DELETE FROM advert where title='$title1";
        if (mysqli_query($conn, $sql)) {
            echo "Records deleted successfully.";
            header("Location: adminhome.php");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    } else {
        // Employee not found
        echo "advert title $title1 does not exist.";
    }
    header("Location: delete-emp.php");

    mysqli_close($conn);
}


?>


 
<html>
    <head>
        <title>DELETE RECORD</title>
        <link rel="stylesheet" type="text/css" href="delete-emp.css">
        <style>
            body{
    background: white;
    background-repeat: no-repeat;
    font-family: sans-serif;
  }
        </style>
    </head>

    <body>

        <div class="loginbox" >
            <h2>Enter the details to delete</h2>
            <form action="advertdelete.php" method="POST">
                <p><b>Delete Advert</b></p>
                <input type="text" name="title1" placeholder="Enter Advert Title" required>
                <input type="Submit" name="submit" value="Delete" >
            </form>
        </div>
    </body>
</html>