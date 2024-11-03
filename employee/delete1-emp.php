<?php

if(isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbDatabase = "payroll";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbDatabase);

    $id = $_POST['id'];

    // Check if the employee exists
    $checkSql = "SELECT * FROM EMPLOYEE WHERE id = '$id'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        // Employee found, proceed with deletion
        $sql = "DELETE FROM EMPLOYEE WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "Records deleted successfully.";
            header("Location: adminhome.php");
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    } else {
        // Employee not found
        echo "Employee with ID $id does not exist.";
    }

    mysqli_close($conn);
}
include 'adminbase.php';

?>


 
<html>
    <head>
        <title>DELETE RECORD</title>
        <link rel="stylesheet" type="text/css" href="delete-emp.css">
    </head>

    <body>
        <div class="loginbox" >
            <h2>Enter the details to delete</h2>
            <form action="delete-emp.php" method="POST">
                <p><b>Employee ID</b></p>
                <input type="text" name="id" placeholder="Enter Employee ID" required>
                <input type="Submit" name="submit" value="Delete" >
            </form>
        </div>
    </body>
</html>