<?php
include 'hrbase.php';
?>
<html>
    <head>
    <title>LEAVE DETAILS</title>
    <link rel="stylesheet" type="text/css" href="tablecss.css">
    </head>
    <body>
    <center>
    <table class="content-table">
        <tr>
            <th>ID</th>
            <th>NO OF DAYS</th>
            <th>APPLICATION DATE</th>
            <th>FROM</th>
            <th>TO</th>
            <th>LEAVE TYPE</th>
            <th>REASON</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "payroll");
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "Select * from APPLY_LEAVE";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            echo "<tr>
                <td><center>" . $row["id"]. "</td>
                <td><center>" . $row["noofdays"]  . "</td>
                <td><center>" . $row["applydate"]. "</td>
                <td><center>" . $row["fromdate"]	  . "</td>
                <td><center>" . $row["todate"]  . "</td>
                <td><center>" . $row["leavetype"]. "</td>
                <td><center>" . $row["reason"]    . "</td>
            </tr>";
            echo '<button onclick="window.locat ion.href=\'apply-leave.php?emp_id=\'">recheck applay-leave</button>';
        }
    echo "</table>";
    }
    else
    {
        echo "No such leave application.";
    }
    $conn->close();
    ?>
    </table>
</div>
</body>
</html>
