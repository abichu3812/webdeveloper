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
  $contact1 = $_POST['contact'];
  $act_level = $_POST['act_level'];
	$dob = $_POST['dob'];
  $doj = $_POST['doj'];
  $email = $_POST['email'];
	$dol = 'unkown';
	$pwd = $_POST['pwd'];
  $cpwd=$_POST['cpwd'];
  $status='pending';
  $contact2 = (string) $contact1;
if($pwd==$cpwd) {
   if($contact2 != null){
    $contact = "+251".$contact2;
      $sql = "INSERT INTO employee(`id`, `username`, `fname`, `lname`, `mname`, `mfname`, `address`, `gender`, `contact`,`act_level`, `dob`, `doj`, `email`, `dol`, `pwd`, `cpwd`,`status`) VALUES ('$id','$username','$fname','$lname','$mname','$mfname','$address','$gender','$contact','$act_level','$dob','$doj','$email','$dol','$pwd','$cpwd','$status')";
      if(mysqli_query($conn, $sql)){
          echo "Records inserted successfully.";
          header("Location: login.php");
      }
      else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }}
      else{
        echo '<script type="text/javascript">alert("invalid contact")</script>';
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
    <title>admin registration form</title>
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


  <!-- this is the registration form-->
  <form action="register.php" method="POST">
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="image/happy-employee-looking-you-thumbs-up-portrait-sitting-desktop-office-97223304.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:50%;" />
                      <img src="image/happy-employee-looking-you-thumbs-up-portrait-sitting-desktop-office-97223304.webp"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height:50%;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">admin Registration Form</h3>
      
                      <div class="row">

                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" name ="id" maxlength="6" minlength="6" id="form3Example1m" class="form-control form-control-lg" required />
                            <label class="form-label" for="form3Example1m"  >admin ID</label>
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
      
                        <h6 class="mb-0 me-4" name ="gender" required>Gender: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                            value="female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0">
                          <input class="form-check-input" type="radio" name="gender" id="otherGender"
                            value="other" />
                          <label class="form-check-label" for="otherGender">Other</label>
                        </div>
      
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" maxlength="9" minlength="9" name ="contact" id="form3Example8" class="form-control form-control-lg" placeholder="+251938789045" required/>
                        <label class="form-label" for="form3Example8" >contact</label>
                      </div>
      
                

                      <div class="row">
                        <div class="col-md-6 mb-4">
                        <label class="form-label" for="form3Example8">Activity Level</label>
                          <select data-mdb-select-init name ="act_level" required>
                            <option >admin</option>
                            <option >employee</option>
                            <option>hr</option>
                          </select>
      
                        </div>
                      </div>
      
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="date" name="dob" id="form3Example9" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example9">DOB</label>
                      </div>
                    
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="date" name="doj" id="form3Example9" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example9">DOJ</label>
                      </div>
      
                       
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example97">Email ID</label>
                      </div>

                      

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="pwd" maxlength="50" minlength="8" id="form3Example99" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example99">password</label>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="cpwd" maxlength="50" minlength="8" id="form3Example99" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form3Example99">coniform_password</label>
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