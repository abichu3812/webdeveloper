<?php
$NAME="";
$ID_NUMBER="";
$SEX="";
$AGE="";
$COLLEGE="";
$DEPARTMENT="";
$YEAR="";
$SEMISTER="";

// Create connection
$conn = mysqli_connect("localhost","root","","dbd");

if(isset($_POST['Register'])){
// Escape user input to prevent SQL injection
$NAME = mysqli_real_escape_string($conn, $_POST['NAME']);
$ID_NUMBER = mysqli_real_escape_string($conn, $_POST['ID_NUMBER']);
$SEX = mysqli_real_escape_string($conn, $_POST['SEX']);
$AGE = mysqli_real_escape_string($conn, $_POST['AGE']);
if (!is_numeric($AGE)) {
  echo "Error: Age must be a number.";
  exit(); // Stop script execution
}
$COLLEGE = mysqli_real_escape_string($conn, $_POST['COLLEGE']);
$DEPARTMENT = mysqli_real_escape_string($conn, $_POST['DEPARTMENT']);
$YEAR = mysqli_real_escape_string($conn, $_POST['YEAR']);
$SEMISTER = mysqli_real_escape_string($conn, $_POST['SEMISTER']);
}
// Insert data into database
$sql = "INSERT INTO abichuu (NAME, ID_NUMBER, SEX, AGE, COLLEGE, DEPARTMENT, YEAR, SEMISTER)
VALUES ('$NAME','$ID_NUMBER', '$SEX', '$AGE', '$COLLEGE', '$DEPARTMENT', '$YEAR', '$SEMISTER')";
if (mysqli_query($conn, $sql)) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>". mysqli_error($conn);
}

?>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="login.php">
        <label for="name">Name:</label>
        <input type="number" name="name" id="name" required><br><br>
        
        <label for="id_number">ID Number:</label>
        <input type="number" name="id_number" id="id_number" required><br><br>
        
        <label for="sex">Sex:</label>
        <input type="radio" name="sex" value="male" checked> Male
        <input type="radio" name="sex" value="female"> Female<br><br>
        
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br><br>
        
        <label for="college">College:</label>
        <input type="number" name="college" id="college" required><br><br>
        
        <label for="department">Department:</label>
        <input type="number" name="department" id="department" required><br><br>
        
        <label for="year">Year:</label>
        <input type="number" name="year" id="year"required><br><br>
        
        <label for="semester">Semester:</label>
        <input type="number" name="semister" id="semister" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>