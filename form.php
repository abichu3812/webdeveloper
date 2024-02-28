
<html>
<head>
<title>Student registeration form</title>
<style>
.form{
  background-color:whitesmoke;
  max-width:500px;
  margin:2rem auto;
  border:2px solid #0FF;
  padding:2rem;
}
#log{
  color:black;
  text-align:center;
}
h1{
  color: black;
  text-align:center;
}
label{
  display:black;  
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<?php
include_once"dbase.php";
$msg="";

if(isset($_POST['change']))
{
	//variable declaration
$nam=$_POST["nm"];
$id=$_POST["id"];
$ssx=$_POST["sx"];
$age=$_POST["ag"];
$coll=$_POST["co"];
$dep=$_POST["de"];
$yer=$_POST["ye"];
$sem=$_POST["se"];
//insert query
$insert="INSERT INTO abichuu(NAME,ID_NUMBER,SEX,AGE,COLLEGE,DEPARTMENT,YEAR,SEMISTER) values('$nam','$id','$ssx','$age','$coll','$dep','$yer','$sem')";
 $save=mysqli_query($connect,$insert);

if(!$save)
{
	echo"not succesfully registered";
	}
	else
	{
		header('location:login.html');
		}    
}

?>
<body>
<div id="log">
<form class="form" name="fm" method="post" action="form.php ">
<h1>Fill The Student Information Correctly </h1>
<label>NAME:<br />
<input type="text" name="nm" value="" id="nm" />
</label><br />
<label>ID_NUMBER:<br />
<input type="text" name="id" value="" id="id"  />
</label><br />
<label>SEX:<br />
<input type="radio" name="sx" value="M" id="sx" />Male
<input type="radio" name="sx" value="Fm" id="sx" />Female
</label><br />
<label>AGE:<br />
<input type="text" name="ag" value="" id="ag" />
</label><br />
<label>COLLEGE: <br />
<input type="text" name="co" value="" id="co" />
</label><br />
<label>DEPARTMENT: <br />
<input type="text" name="de" value="" id="de"   />
</label><br />
<label>YEAR: <br />
<input type="text" name="ye" value="" id="ye"   />
</label><br />
<label>SEMISTER: <br />
<input type="text" name="se" value="" id="se"   />
</label><br />
<input type="submit" name="change" value="register" />
<input type="reset" name="reset" value="Clear"  /><br>
<p align="center"><a href="logout.php"> LOGOUT</a></p>
<span id="ii" style="color:green; font-size:30px"> <?php echo $msg;?></span>
</form>
</div>
</body>
</html>