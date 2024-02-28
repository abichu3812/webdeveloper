<html>
<?php
session_start();
$id=$_SESSION['ID_NUMBER'];
if(!($id=="3970/12")){
  header("location:login.php");
  die();  
	   }
?>
<?php
include_once "dbase.php";
if(isset($_GET['ID_NUMBER']))
{
  $id=$_GET['ID_NUMBER'];
  $deleteq="delete from abichuu where ID_NUMBER='$id' ";
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
</tr>

<?php
include_once "dbase.php";

$selectq="SELECT * FROM abichuu";
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
    </tr>
    ";
  }
}
else{
  echo"There is no informaion in this database";
}
if(isset($_POST['login'])){
   
   $id=$_POST['id'];
    
     if(empty($_POST['id']))
     {
      echo"field is required";
       }
       else{     
    $selectquery="SELECT * FROM abichuu WHERE ID_NUMBER='$id'";
    $runselectquery=mysqli_query($connect,$selectquery);
    $numberofrows=mysqli_num_rows($runselectquery);
    
    if($numberofrows > 0){  
      $id1="ru3213/12";
     
        if($id==$id1){
      header("location:error_reporting(0);login.php");  
      }
      else {
      echo"you are not permit anything!";
      }
	}
  }
}

?>	
<tr><td colspan="2"align="center"><a href="logout.php">Logout</a>
<span id="red" style="color:red;font-size:2px"><?php echo $newmess; ?></span> </td></tr>
</table>
</html>