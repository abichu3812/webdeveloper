<?php
session_start();
$id=$_SESSION['ID_NUMBER'];
if(!($id=="ru1234/12")){
  header("location:db.php");
  die();  
	   }
?>
<html>
<?php
include_once "dbase.php";
if(isset($_GET['ID_NUMBER']))
{
  $id=$_GET['ID_NUMBER'];
  $deleteq="delete from stud where ID_NUMBER='$id' ";
  $run_deleteq=mysqli_query($connect,$deleteq);
  if($run_deleteq)
  {
    echo"";
  }
  else{
    echo"";
  }
}
?>
<table border="1" align="center">
<caption><font color="#FF00FF"><b><i>=====DATABASE INFORMATION.=====</i></b></font></caption>
<tr bgcolor="black" style="color:#FFF;">
<td>Name</td>
<td>Id_number</td>
<td>Sex</td>
<td>Age</td>
<td>COLLEGE</td>
<td>DEPARTMENT</td>
<td>Year</td>
<td>Semester</td>
<td  colspan="2" >action</td>
</tr>
<?php
include_once "dbase.php";
error_reporting(0);
$selectq="SELECT * FROM stud";
$run_selectq=mysqli_query($connect,$selectq);
$numofrows=mysqli_num_rows($run_selectq);
if($numofrows>0)
{
  while($x=mysqli_fetch_assoc($run_selectq))
  {
    echo"
    <tr>
    <td>".$x['NAME']."</td>
    <td>".$x['ID_NUMBER']."</td>
    <td>".$x['SEX']."</td>
    <td>".$x['AGE']."</td>
    <td>".$x['COLLEGE']."</td>
    <td>".$x['DEPARTMENT']."</td>
	<td>".$x['YEAR']."</td>
	<td>".$x['SEMISTER']."</td>
    <td>
    
    <a href='?ID_NUMBER=".$x['ID_NUMBER']." '>Delete</a>
    <a href='updateForm1.php?ID_NUMBER=".$x['ID_NUMBER']."'>Update</a>
	<a href='form.php?ID_NUMBER=".$x['ID_NUMBER']."'>Add new</a>
	
    </td>
	
    </tr>
    ";
  }
}
else{
  echo"There is no informaion in this database";
}
?>	
<tr><td colspan="3"align="center"><a href="logout.php">Logout</a>
<span id="red" style="color:red;font-size:24px"><?php echo $newmess; ?></span> </td></tr>
</table>
</html>