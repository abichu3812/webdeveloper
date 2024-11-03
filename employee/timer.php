<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color: gray;" >

<section class="vh-100 bg-image" style="width: 100%; height: 120vh;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3" style="padding: 20px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-8">
          <div class="card" style="border-radius: 15px; width: 100%; max-width: 900px;">
            <div class="card-body p-5">




                        <script src="timer.js"></script>
    <script>
        // Embed the countdown values directly into the script
        var countdownData = {
            day: data,
            hour: 5,
            minute: 1,
            second: 0
        };
    </script>
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
                      <div> " . $row["text"]. "</div>";
                }
                echo "</table>";
            }
            else { echo "Currently no members."; }
            $conn->close();
            ?>




                <div  style="text-align:right;" >
                    <h1 id="secondsleft"></h1>
                    <h4 id="daysleft" ></h4>
                    <h4 id="hmsleft"></h4>

                </div>
                    <br>
                    <h2 class="text-uppercase text-center mb-5">ማስታዎቂያ</h2>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <h1>this is the adverts</h1>
                    </div>

                     <div class="d-flex justify-content-end pt-3">
                         <a href="{% url 'register' %}" class="btn btn-warning btn-lg ms-2">REGISTER</a>
                     </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</body>
</html>