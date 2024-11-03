<?php
include 'adminbase.php';
?>
<html>
    <head>
        <title>TRAINING DETAILS</title>
        <style>

    
* {
    font-family: sans-serif; /* Change your font family */
  }
  
  body{
      background: white;
      background-position: fixed;
      background-repeat: no-repeat;
      background-size: cover;
  
  }
  
  .tab{
      color: white;
      margin:auto;
      background-color: black;
      padding:10px;
  }
  
  .content-table {
    background-color: black;
      color: white;
      opacity: 0.9;
width: 20%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 13px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }
  
  .content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
  
    text-shadow: 2px 2px 2px black;
  
  }
  
  .content-table th
  {
      font-size: 13px;
  border-bottom: .5px solid #dddddd;
      text-decoration:underline;
  
  }
  .content-table th,
  .content-table td {
    padding: 12px 12px;
    text-transform: capitalize;
  }
  
  .content-table tbody tr {
  
     border: 1px solid black;
     border-bottom: 1px solid black;
  }
  
.content-table tbody tr:nth-of-type(even) {
    background-color: black;
    opacity: 0.6;
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
        <table class="content-table">
                <tr>
                    <th>TRAIN ID</th>
                    <th>TRAIN FNAME</th>
                    <th>TRAIN LNAME</th>
                    <th>TRAIN MNAME</th>
                    <th>TRAIN MFNAME</th>
                    <th>ADDRESS</th>
                    <th>GENDER</th>
                    <th>CONTACT NO</th>
                    <th>STATE</th>
                    <th>DOJ</th>
                    <th>DOL</th>
                    <th>TRAN_STATUS</th>
                    <th>CERT_STATUS</th>
                    <th>ACT_STATUS</th>
                </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "payroll");
            // Check connection
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from train where status='aproved'";
            $result = $conn->query($sql);
            if ($result -> num_rows > 0)
            {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                	// echo $row;
                   echo "<tr>
                        <td><center>" . $row["id"]. "</td>
                        <td><center>" . $row["fname"] . "</td>
                        <td><center>" . $row["lname"] . "</td>
                        <td><center>" . $row["mname"] . "</td>
                        <td><center>" . $row["mfname"] . "</td>
                        <td><center>" . $row["address"]  . "</td>
                        <td><center>" . $row["gender"]  . "</td>
                        <td><center>" . $row["contact"]. "</td>
                          <td><center>" . $row["state"]. "</td>
                          <td><center>" . $row["doj"]. "</td>
                           <td><center>" . $row["dol"]. "</td>
                        <td><center>" . $row["tran_status"]  . "</td>
                        <td><center>" . $row["cert_status"]  . "</td>
                        <td><center>" . $row["act_status"]  . "</td>
                    </tr>";
                }
                echo "</table>";
            }
            else { echo "Currently no members."; }
            $conn->close();
            ?>
            </table>
        </body>
	</html>
