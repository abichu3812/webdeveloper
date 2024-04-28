<html>

<table border="1" align="center">
<caption><font color="#FF00FF"><b><u>=====YOUR INFORMATION.=====</u></b></font></caption>
<tr bgcolor="black" style="color:#FFF;">
<td>ID_No</td>
<td>First Name</td>
<td>Father Name</td>
<td>Last Name</td>
<td>Age</td>
<td>Gender</td>
<td>Birth Place</td>
<td>Upload Photo</td>
<td>Employee Office</td>
<td>Job Description</td>
<td>Phone</td>
<td>Email</td>
<td>Block</td>
<td>Flour</td>
<td>Unit</td>
<td>Family Members</td>
</tr>
<?php
include_once "dbase.php";
$msg="";
if(isset($_POST['login']))
{
	$un=$_POST['un'];
    $pw=$_POST['pw'];
$selectq="SELECT * FROM project WHERE ID_No='$un' and First_name='$pw'";
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
		<td>".$x['ID_No']."</td>
		<td>".$x['First_name']."</td>
		<td>".$x['Father_name']."</td>
		<td>".$x['Last_name']."</td>
		<td>".$x['Age']."</td>
		<td>".$x['Gender']."</td>
		<td>".$x['Birth_Place']."</td>
		<td>".$x['Upload_Photo']."</td>
		<td>".$x['Employee_Office']."</td>
		<td>".$x['Job_Description']."</td>
		<td>".$x['Phone']."</td>
		<td>".$x['Email']."</td>
		<td>".$x['Select_Block']."</td>
		<td>".$x['Select_Flour']."</td>
		<td>".$x['Select_Unit']."</td>
		<td>".$x['Family_Members']."</td>
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
	header("location:emplogin.php");
	//echo"There is no informaion in this database";
}
?>
</table>
</html>