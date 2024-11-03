<?php
include 'adminbase.php';
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "payroll";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);
  $text = $_POST['text'];
  $days = $_POST['days'];
  $hours = $_POST['hours'];
  $minutes = $_POST['minutes'];


  $sql = "INSERT INTO advert(`text`, `days`, `hours`, `minutes`) VALUES ('$text','$days','$hours','$minutes')";
  if(mysqli_query($conn, $sql)){
      echo "Records inserted successfully.";
      header("Location: adminhome.php");
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: gray;">

<section class="vh-100 bg-image" style="width: 100%; height: 120vh;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3" style="padding: 20px;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-8">
          <div class="card" style="border-radius: 15px; width: 100%; max-width: 900px;">
            <div class="card-body p-5">

                <form action="advert.php" method="POST" enctype="multipart/form-data">

                <div  >
                    <input type="text" name ="title" class="form-control form-control-lg" placeholder="Set Your Title From Here" required/>

                </div>
                    <br>
                    <h2 class="text-uppercase text-center mb-5" >write your file</h2>

                <div data-mdb-input-init class="form-outline mb-4">
                   <textarea name="text" rows="14" cols="20" id="form3Example4cdg" class="form-control form-control-lg"></textarea>
                </div>

                <div   >
                    <h1>set the time that the advert will waite</h1>
                  <input type="number" name="days" id="days" min="0" required style="width: 20%; padding: 8px; box-sizing: border-box;" placeholder="Days">
                  <input type="number" name="hours" id="hours" min="0" max="23" required style="width: 100%; padding: 8px; box-sizing: border-box;" placeholder="Hour">

                 <input type="number" name="minutes" id="minutes" min="0" max="59" required style="width: 100%; padding: 8px; box-sizing: border-box;" placeholder="Minute">

                </div>

                <div class="d-flex justify-content-end pt-3">
                        <button type="submit" name='submit' id="submit"><b>Register</b></button>
                      </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</body>
</html>