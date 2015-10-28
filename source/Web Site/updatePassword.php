<?php

//echo $_POST['Line1'];
require_once "connect.php";
require_once"session.php";
session_start();
if(isset($_POST['NewPassword'])){

	  $_SESSION['Password'] = $_POST['NewPassword'];

$query ="UPDATE customer SET PassHash_CUST = '$_POST[NewPassword]' WHERE UserName_CUST = '$_SESSION[user]'";

echo $query;
$result = mysql_query($query);
echo '<script>
      window.location = "myProfile.php"
      
      </script>';

}
else
echo "Bitch";

?>