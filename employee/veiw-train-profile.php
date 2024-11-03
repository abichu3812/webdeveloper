<?php
include 'basetrain.php';
?>
<html>
<head>
    <title>PROFILE</title>
    <link rel="stylesheet" type="text/css" href="view-profile.css">
    <style>body{
    background: white;
    background-repeat: no-repeat;
    font-family: sans-serif;
  }</style>
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

            $sql = "SELECT * FROM train WHERE id = '$eid' && status='aproved'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $display = mysqli_fetch_assoc($result);

                echo '<table class="content-table">
                    <tr><td>ID</td><td>: ' . $display['id'] . '</td></tr>
                    <tr><td>USERNAME</td><td>: ' . $display['username'] . '</td></tr>
                    <tr><td>FNAME</td><td>: ' . $display['fname'] . '</td></tr>
                    <tr><td>DATE OF BIRTH</td><td>: ' . $display['doj'] . '</td></tr>
                    <tr><td>GENDER</td><td>: ' . $display['gender'] . '</td></tr>
                    <tr><td>ADDRESS</td><td>: ' . $display['address'] . '</td></tr>
                    <tr><td>CONTACT NO</td><td>: ' . $display['contact'] . '</td></tr>
                    <tr><td>EMAIL ID</td><td>: ' . $display['email'] . '</td></tr>
                    <tr><td>TRAINING STATUS</td><td>: ' . $display['tran_status'] . '</td></tr>
                    <tr><td>CERTIFICATING STATUS</td><td>: ' . $display['cert_status'] . '</td></tr>
                    <tr><td>ACTIVITY STATUS</td><td>: ' . $display['act_status'] . '</td></tr>
                </table>';

            } else {
                echo "No data found.";
            }

            $conn->close();
        }
        ?>
    </center>
</body>
</html>
