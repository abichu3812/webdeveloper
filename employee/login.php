<?php
$id=" ";

$pwd=" ";
$err=" ";
//database connection
$conn= mysqli_connect("localhost","root","", "payroll");

if(isset($_POST['login'])){

$id=mysqli_real_escape_string($conn, $_POST['id']);

$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

$sql="SELECT *FROM employee WHERE id='".$id."' AND

pwd='".$pwd."'
&& act_level='admin' limit 1";

$sql1="SELECT *FROM employee WHERE id='".$id."' AND

pwd='".$pwd."' && act_level='employee'  limit 1";
$sql2="SELECT *FROM employee WHERE id='".$id."' AND

pwd='".$pwd."' &&  act_level='hr' limit 1";
$sql3="SELECT *FROM train WHERE id='".$id."' AND

pwd='".$pwd."' limit 1";


$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql1);
$result3 = mysqli_query($conn,$sql2);
$result4 = mysqli_query($conn,$sql3);

if(empty($_POST["id"])) {

$err="emp_id is required!";

}else  {   $id =($_POST["id"]);
}

if(empty($_POST["pwd"])) {

$err="password is required!";
}
if(mysqli_num_rows($result)==1){
    header('location:adminhome.php');
    }
    else{
    $err="invalid emp_id or password!";
    }
    if(mysqli_num_rows($result2)==1){
      header('location:home.php');
      }
      else{
      $err="invalid emp_id or password!";
      }
      if(mysqli_num_rows($result3)==1){
        header('location:hrhome.php');
        }
        else{
        $err="invalid emp_id or password!";
        }
        if(mysqli_num_rows($result4)==1){
          header('location:basetrain.php');
          }
          else{
          $err="invalid emp_id or password!";
          }

      

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>
  <body>





    <section class="vh-100" style="background-color: #9A616D;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
    
                    <form action="login.php"method="post">
    
                     <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">Logo</span>
                      </div>
    
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
    
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" name="id" id="form2Example17" class="form-control form-control-lg"required />
                        <label class="form-label" for="form2Example17">id</label>
                      </div>
    
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="pwd" id="form2Example27" class="form-control form-control-lg" required/>
                        <label class="form-label" for="form2Example27">Password</label>
                      </div>
                      
                      <div style="color: red;">
                      <?php echo $err;?>
                      </div></br>
    
                      <div class="pt-1 mb-4">
                        <input type= "submit" name="login"value="login"><br>
                                      </div>
    
                      <a class="small text-muted" href="#!">Forgot password?</a>
                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                          style="color: #393f81;">Register here</a></p>
                      <a href="#!" class="small text-muted">Terms of use.</a>
                      <a href="#!" class="small text-muted">Privacy policy</a>
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





    
    <script src="bootstrap.bundle.min.js" ></script>
  </body>
</html>