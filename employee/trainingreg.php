<?php
include 'hrbase.php';
?>
<?php
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "root";
$password = "";
 $dbDatabase = "payroll";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbDatabase);
  $id = $_POST['id'];
 $username = $_POST['username'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mname = $_POST['mname'];
  $mfname = $_POST['mfname'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $contact = $_POST['contact'];
  $state = $_POST['state'];
  $doj = $_POST['doj'];
  $dol = $_POST['dol'];
  $email = $_POST['email'];
  $school = $_POST['school'];
  $pwd = $_POST['pwd'];
  $cpwd=$_POST['cpwd'];
  $tran_status = '...';
  $cert_status = '...';
  $act_status = '...';
  $status='pending';

if($pwd==$cpwd) {

  $sql = "INSERT INTO train(`id`, `username`, `fname`, `lname`, `mname`, `mfname`, `address`, `gender`, `contact`, `state`, `doj`, `dol`, `email`, `school`, `pwd`, `cpwd`, `tran_status`,`cert_status`,`act_status`,`status`) VALUES ('$id','$username','$fname','$lname','$mname','$mfname','$address','$gender','$contact','$state','$doj','$dol','$email','$school','$pwd','$cpwd','$tran_status','$cert_status','$act_status','$status')";
  if(mysqli_query($conn, $sql)){
      echo "Records inserted successfully.";
      header("Location: login.php");
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}else {
  echo '<script type="text/javascript">alert("Please ConfirmPassword")</script>';
}
  }
  
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration form</title>
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <!-- this is the registration form-->
  <form action="trainingreg.php" method="POST">
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="pays.png"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;height: 100%" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">training and development</h3>
      
                      <div class="row">

                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" name ="id" id="form3Example1m" class="form-control form-control-lg" required/>
                            <label class="form-label" for="form3Example1m">TRAINING ID</label>
                          </div>
                        </div>


                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" name ="username" id="form3Example1m" class="form-control form-control-lg" required/>
                            <label class="form-label" for="form3Example1m">User Name</label>
                          </div>
                        </div>

                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" name ="fname" id="form3Example1m" class="form-control form-control-lg" required/>
                            <label class="form-label" for="form3Example1m">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" name ="lname" id="form3Example1n" class="form-control form-control-lg" required/>
                            <label class="form-label" for="form3Example1n">Last name</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" name ="mname" id="form3Example1m1" class="form-control form-control-lg" required/>
                            <label class="form-label" for="form3Example1m1">Mother's name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" name ="mfname" id="form3Example1n1" class="form-control form-control-lg" required/>
                            <label class="form-label" for="form3Example1n1">Father's name</label>
                          </div>
                        </div>
                      </div>
      
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name ="address" id="form3Example8" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example8">Address</label>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
      
                        <h6 class="mb-0 me-4" name ="gender">Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="female" required/>
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="male" required/>
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="gender" id="otherGender"
                            value="other" required/>
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name ="contact" id="form3Example8" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example8">contact</label>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                        <label class="form-label" for="form3Example8" >STATE</label>
                          <select data-mdb-select-init name ="state" required>
                            <option>....</option>
                            <option>et</option>
                            <option>uk</option>
                            <option>usa</option>
                          </select>
      
                        </div>
      
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="date" name="doj" id="form3Example9" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example9">DOJ</label>
                      </div>
                    
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="date" name="dol" id="form3Example9" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example9">DOL</label>
                      </div>
      
                       
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example97">Email ID</label>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="school" id="form3Example99" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example99">school level</label>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="pwd" id="form3Example99" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Example99">password</label>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="cpwd" id="form3Example99" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example99">cofirm_password</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <button type="submit" name='submit' id="submit"><b>Register</b></button>
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </form>   
    <script src="bootstrap.bundle.min.js" ></script>
  </body>
</html>