<?php
include 'hrbase.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        p{
text-align: right;
        }
    </style>
</head>
<body style="background-color: gray;">

<section class="vh-100 bg-image" style="width: 100%; height: 120vh;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3" style="padding: 20px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-8">
          <div class="card" style="border-radius: 15px; width: 100%; max-width: 900px;">
            <div class="card-body p-5">

                <div  style="text-align:right;" >
                </div>
                    <br>
                    <h2 class="text-uppercase text-center mb-5">ማስታዎቂያ</h2>

                    <div data-mdb-input-init class="form-outline mb-4">

                        <?php
            $conn = mysqli_connect("localhost", "root", "", "payroll");
            // Check connection
            if ($conn->connect_error)
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from advert";
            $result = $conn->query($sql);
            if ($result -> num_rows > 0)
            {
                // output data of each row
                while($row = $result->fetch_assoc())
                {
                 echo "
                    <p> ቀን ". $row["days"]. ":
                       " . $row["hours"] . ":
                        " . $row["minutes"] . "
                        </p>";
                    
                   echo "
                      <div> <pre>" . $row["text"]. "</pre></div>";
                }
                echo "</table>";
            }
            else { echo "Currently no Adverts."; }
            $conn->close();
            ?>
                    </div>

                     <div class="d-flex justify-content-end pt-3">
                         <a href="trainingreg.php" class="btn btn-warning btn-lg ms-2">REGISTER</a>
                     </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="timer.js"></script>

</body>
</html>