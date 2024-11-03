<?php 
include 'base.php';
?>

<html>
<head>
    <title>PROFILE</title>
    <link rel="stylesheet" type="text/css" href="view-profile.css">
</head>
<body>
    <center>
        <h1>YOUR SALARY DETAILS</h1>
        <form method="post">
            <input type="text" name="emp_id" placeholder="Enter Employee ID" required>
            <input type="submit" value="View salary">
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

            $sql = "SELECT * FROM salary WHERE id = '$eid'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $display = mysqli_fetch_assoc($result);

                echo '<table class="content-table">
                    <tr><td>EMP ID</td><td>: ' . $display['id'] . '</td></tr>
                    <tr><td>MONTHLY ALLOWANSS</td><td>: ' . $display['monthlyallow'] . '</td></tr>
                    <tr><td>BASIC PAY</td><td>: ' . $display['basic_pay'] . '</td></tr>
                    <tr><td>CONVENTRY ALLOWANSS</td><td>: ' . $display['ca'] . '</td></tr>
                    <tr><td>FOOD ALLOWANSS</td><td>: ' . $display['food_allow'] . '</td></tr>
                    <tr><td>BONES</td><td>: ' . $display['bonus'] . '</td></tr>
                    <tr><td>PROVISIONAL</td><td>: ' . $display['provisional'] . '</td></tr>
                    <tr><td>INSURANCE</td><td>: ' . $display['insurance'] . '</td></tr>
                    <tr><td>TOTAL EARNIG</td><td>: ' . $display['total_earning'] . '</td></tr> 
                    <tr><td>DEDUCTIONS</td><td>: ' . $display['deductions'] . '</td></tr>
                    <tr><td>NET PAY</td><td>: ' . $display['netpay'] . '</td></tr>
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
