
<?php 
include 'hrbase.php';
?>
<html>
<head>
    <title>PROFILE</title>
    <link rel="stylesheet" type="text/css" href="view-profile.css">
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
    text-shadow: black;

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
        <h1>YOUR LEAVE DETAILS</h1>
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

            $sql = "SELECT * FROM apply_leave WHERE id = '$eid'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $display = mysqli_fetch_assoc($result);

                echo '<table class="content-table">
                    <tr><td>EMP ID</td><td>: ' . $display['id'] . '</td></tr>
                    <tr><td>NUMBER OF DAYS</td><td>: ' . $display['noofdays'] . '</td></tr>
                    <tr><td>APPLY DATE</td><td>: ' . $display['applydate'] . '</td></tr>
                    <tr><td>FROM DATE</td><td>: ' . $display['fromdate'] . '</td></tr>
                    <tr><td>TO DATE</td><td>: ' . $display['todate'] . '</td></tr>
                    <tr><td>LEAVE type</td><td>: ' . $display['leavetype'] . '</td></tr>
                    <tr><td>REASON</td><td>: ' . $display['reason'] . '</td></tr>                  
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
