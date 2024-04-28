<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// remove all session variables
session_unset();
// destroy the session
session_destroy();
header("location:login.php?message1=you are logged out")
?>
</body>
</html>