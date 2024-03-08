<?php

$NAME=" ";

$ID_NUMBER=" ";
$err=" ";
//database connection
$conn= mysqli_connect("localhost","root","", "dbd");

if(isset($_POST['login'])){

$NAME=mysqli_real_escape_string($conn, $_POST['name']);

$ID_NUMBER=mysqli_real_escape_string($conn,$_POST['id_number']);

$sql="SELECT *FROM abichuu WHERE NAME='".$NAME."' AND

ID_NUMBER='".$ID_NUMBER."' limit 1";

$result = mysqli_query($conn,$sql);

if(empty($_POST["NAME"])) {

$err="username is required!";

}else  {   $NAME =($_POST["NAME"]);
}

if(empty($_POST["ID_NUMBER"])) {

$err="password is required!";
}
if(mysqli_num_rows($result)==1){
    header('location:home.php');
    }
    else{
    $err="username or password incorrect!";
    }
}
?>
<html>
<head>
<tittle></tittle>
<style>
form{
  background-color:wheat;
  max-width:200px;
  margin:2rem auto;        
  border:2px solid burlywood ;
  padding:2rem;
  border-radius: 10%;
}
.ab{
  background-color: white;
  width: 85%;
  border-radius: 4%;
}
.err{
  text-align: center;
  color: red;
}
.button{
width: 85%;
} 
</style>
</head>
<body>
<h1 style="text-align: center;">LOGIN Here</h1>
<div class="err">
<?php echo $err;?>
</div>
<form action="login.php"method="post">
<div class="ab">
<input type="text" name="name" id="" placeholder ="Enter username"required></br>
<input type="id_number" name="id_number" id="" placeholder="Enter password"required></br>
<input type= "submit" name="login" class="button" value="login">
Not yet a member? <a href="register.php" style="color:blue;text-decoration: none;">singup</a>
</form>
</div>
</body>
</html>