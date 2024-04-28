<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 543px;
	height: 450px;
	z-index: 1;
	left: 364px;
	top: 48px;
	background-color: #996666;
}
body,td,th {
	font-size: 36px;
}
</style>
</head>
<?php
include_once"dbase.php";
if(isset($_POST['login']))
{
$u=$_POST['un'];
$p=$_POST['pw'];

$selectq="SELECT * FROM admin WHERE Username='$u' and Password='$p'";
$run_selectq=mysqli_query($conn,$selectq);
 if(!$run_selectq)
  {
      echo"ERROR".mysqli_connect_error();
    }
    else
    {
    $check=mysqli_num_rows($run_selectq);
  if($check ==1)
     {
	while($x=mysqli_fetch_assoc($run_selectq))
	{
		echo"
		<tr>
		<td>".$x['First_name']."</td>
		<td>".$x['Last_name']."</td>
		<td>".$x['Job_Description']."</td>
		<td>".$x['Phone']."</td>
		<td>".$x['Username']."</td>
		<td>".$x['Password']."</td>
		<td>".$x['Gender']."</td>
		</tr>
		";
	}
}
else{
	echo"Sorry! your user name and password's are incorrect, please try again!.";
	$msg="error".mysqli_connect_error();
}
	}
}
else{
	header("location:admin.html");
	//echo"There is no informaion in this database";
}
?>	
<body>
<div id="apDiv1">
  <p style="text-align:center">&nbsp;</p>
  <p style="text-align:center"><u><b style="color:#00F">Please Login Here</b></u></p>
  <form id="form1" name="form1" method="post" action="manager.php">
    <p align="center">
      <label for="textfield">User Name</label>
      <input type="text" name="un" id="textfield" />
    </p>
    <p align="center">
      <label for="textfield2">Password</label>
      <input type="text" name="pw" id="textfield2" />
    </p>
    <p align="center">
      <input type="submit" name="login" id="button" style="font-size:18px" value="LOGIN" />
    </p>
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>