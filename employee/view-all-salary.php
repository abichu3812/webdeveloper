<?php
include 'hrbase.php';
?>
<html>
    <head>
        <title>SALARY DETAILS</title>
        <link rel="stylesheet" type="text/css" href="tablecss.css">
    </head>
    <body>
        <center>
    	<table class="content-table">
            <tr>
                <th>ID</th>
                <th>MONTHLY ALLOWANCE</th>
                <th>BASIC PAY</th>
                <th>CA</th>
                <th>HRA</th>
                <th>FOOD ALLOWANCE</th>
                <th>BONUS</th>
                <th>PROVISIONAL TAX</th>
                <th>PROVIDENT FUND</th>
                <th>INSURANCE</th>
                <th>TOTAL EARNINGS</th>
                <th>DEDUCTIONS</th>
                <th>NET PAY</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "payroll");
            // Check connection
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "Select * from salary";
            $result = $conn->query($sql);
            if ($result->num_rows > 0)
            {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>
                            <td><center>" . $row["id"]. "</td>
                            <td><center>" . $row["monthlyallow"]. "</td>
                            <td><center>" . $row["basic_pay"]  . "</td>
                            <td><center>" . $row["ca"]  . "</td>
                            <td><center>" . $row["food_allow"]. "</td>
                            <td><center>" . $row["bonus"]  . "</td>
                            <td><center>" . $row["provisional"]. "</td>
                            <td><center>" . $row["provident"]  . "</td>
                            <td><center>" . $row["insurance"]  ."</td>
                            <td><center>" . $row["total_earning"] ."</td>
                            <td><center>" . $row["deductions"]  ."</td>
                            <td><center>" . $row["netpay"]  ."</td>
                        </tr>";
                }
                echo "</table>";
            }
            else { echo "Currently no salary details."; }
            $conn->close();
            ?>
        </table>
    </body>
</html>
