
<?php 
include 'base.php';
?>
<html>
<head>
    <title>PROFILE</title>
    <link rel="stylesheet" type="text/css" href="view-profile1.css">
    <style>

body{
    background: white;
    background-position: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    font-family:sans-serif;
}

h1{
    padding-top: 25px;
    
    text-shadow:  black;

}
.content-table{
    background-color: black;
    color: white;
    opacity: 0.8;
}


.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  min-width: 400px;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
  font-size: 15px;
  text-shadow: 2px 2px 2px black;

}

.content-table td {
  padding: 12px 15px;
  text-transform: capitalize;
}

.content-table tbody tr {

   border: 1px solid black;
   border-bottom: 1px solid black;
}


.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

.content-table tr:hover
{
    background-color: darkorange;
}

    </style>
</head>
<body>
    <center>
        <h1>YOUR PROFILE DETAILS</h1>
        <form method="post">
            <input type="text" name="emp_id" placeholder="Enter Employee ID" required>
            <input type="submit" value="View Profile">
        </form>
        <?php
        session_start();
        if (isset($_POST['emp_id'])) {
            $eid = $_POST['emp_id'];

            $conn = mysqli_connect("localhost", "root", "", "payroll");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM EMPLOYEE WHERE id = '$eid' && status='aproved'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $display = mysqli_fetch_assoc($result);

                echo '<table class="content-table">
                    <tr><td>ID</td><td>: ' . $display['id'] . '</td></tr>
                    <tr><td>USERNAME</td><td>: ' . $display['username'] . '</td></tr>
                    <tr><td>FNAME</td><td>: ' . $display['fname'] . '</td></tr>
                    <tr><td>DATE OF BIRTH</td><td>: ' . $display['dob'] . '</td></tr>
                    <tr><td>GENDER</td><td>: ' . $display['gender'] . '</td></tr>
                    <tr><td>ADDRESS</td><td>: ' . $display['address'] . '</td></tr>
                    <tr><td>CONTACT NO</td><td>: ' . $display['contact'] . '</td></tr>
                    <tr><td>EMAIL ID</td><td>: ' . $display['email'] . '</td></tr>
                    <tr><td>DATE OF JOINING</td><td>: ' . $display['dob'] . '</td></tr>
                    <tr><td>SCHOOL_LEVEL</td><td>: ' . $display['status'] . '</td></tr>
                </table>';

                // Add update button here
                echo '<button onclick="window.location.href=\'profile-update.php?emp_id=' . $display['id'] . '\'">Update Profile</button>';

            } else {
                echo "No data found.";
            }
            $conn->close();
        }
        ?>
    </center>
</body>
</html>
