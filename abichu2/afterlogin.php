<html>

<table border="1" align="center">
<caption><font color="#FF00FF"><b><i>=====YOUR INFORMATION.=====</i></b></font></caption>
<tr bgcolor="black" style="color:#FFF;">
<td>First name</td>
<td>Last name</td>
<td>Job Description</td>
<td>Phone number</td>
<td>User name</td>
<td>Password</td>
<td>Gender</td>
</tr>
<?php
include_once "dbase.php";
$msg="";
if(isset($_POST['login']))
{
	$un=$_POST['un'];
    $p=$_POST['pw'];
$selectq="SELECT * FROM admin WHERE Username='$un' and Password='$p'";
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
	echo"Sorry your user name and password's are incorrect, please try again!.";
	$msg="error".mysqli_connect_error();
}
	}
}
else{
	header("location:adlogin.php");
	//echo"There is no informaion in this database";
}
?>
</table>
</html>