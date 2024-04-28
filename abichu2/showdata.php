

<html>
<?php
include_once "dbase.php";
$id="";
if(isset($_GET['ID_No']))
{
	$id=$_GET['ID_No'];
	$deleteq="delete from project where ID_No='$id'";
	$run_deleteq=mysqli_query($conn,$deleteq);
	
	if($run_deleteq)
	{
		echo"deleted";
	}
else
	{
		echo"not deleted";
	}
}
?>
<table border="1" align="center">
<tr bgcolor="green" style="color:white">
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
<td colspan="2">Actions</td>
</tr>
<?php
include_once "dbase.php";
$selectq="SELECT * FROM project";
$run_selectq=mysqli_query($conn,$selectq);

$numofrows=mysqli_num_rows($run_selectq);
if($numofrows>0)
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
		<td>
		<a href='?ID_No=".$x['ID_No']."'>Delete</a>
		</td>
		<td>
		<a href='update.php?ID_No=".$x['ID_No']."'>Edit</a>
		</td>
		
		</tr>
		
		";
	}
}
else
{
	echo"there is no information in your database";
}
?>
</table>
</html>