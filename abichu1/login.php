
<html>
<head>
<title>LOGIN</title>
</head>
<?php
  include_once"dbase.php";
  error_reporting(0);
            $message="";
      $id1="";
      $id2="";
      $id3="";
      $id4="";
      $id5="";
      $id6="";
      $id7="";
      $id8="";
	  $id9="";
  if(isset($_POST['login'])){
   
   $id=$_POST['id'];
    
     if(empty($_POST['id']))
     {
      echo"field is required";
       }
       else{     
    $selectquery="SELECT * FROM stud WHERE ID_NUMBER='$id'";
    $runselectquery=mysqli_query($connect,$selectquery);
    $numberofrows=mysqli_num_rows($runselectquery);
    
	echo $numberofrows;
    if($numberofrows > 0){  
   
      $id1="ru1234/12";
      $id2="ru1221/12";
      $id3="ru3213/12";
      $id4="ru5423/12";
      $id5="ru6556/12";
      $id6="ru0120/12";
	  $id7="ru0012/12";
	  $id8="ru1851/12";
	  $id9="ru0051/12";
       if($id==$id1){
		  session_start();
       $_SESSION['ID_NUMBER']=$id1;
      header("location:delete.php");  
      }
      else if($id==$id2){
		   session_start();
       $_SESSION['ID_NUMBER']=$id2; 
      header("location:logout.php");  
      }else if($id==$id3){
		  session_start();
       $_SESSION['ID_NUMBER']=$id3; 
      header("location:view.php");  
      }else if($id==$id4){
        session_start();
        $_SESSION['ID_NUMBER'] = $id4;
      header("location:view4.php");  
      }else if($id==$id5){
          session_start();
             $_SESSION['ID_NUMBER'] = $id5;
      header("location:view5.php");  
      }else if($id==$id6){
		   session_start();
       $_SESSION['ID_NUMBER']=$id6;
      header("location:view6.php");  
      }else if($id==$id7){
		   session_start();
       $_SESSION['ID_NUMBER']=$id7;
        header("location:view7.php");
      }
	  else if($id==$id8){
		   session_start();
       $_SESSION['ID_NUMBER']=$id8;
        header("location:form.php");
      }
	   else if($id==$id9){
		    session_start();
       $_SESSION['ID_NUMBER']=$id9;
        header("location:choose.php");
      }
      else {
      echo" INCORRECT ID!";
      }
	  }
	}
    }

?>
<body>
<div id="apDiv1">
  <p style="text-align:center"><u><b style="color:#00F">LOGIN PAGE</b></u></p>
  <form id="form1" name="form1" method="post" action="view.php">
    <p align="center">
      <label for="textfield2">ID_NUMBER</label>
      <input type="text" name="id" id="id" />
    </p>
    <p align="center">
      <input type="submit" name="login" id="button" style="font-size:18px" value="LOGIN" />
    </p>
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>