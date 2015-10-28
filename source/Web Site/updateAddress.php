<?php

//echo $_POST['Line1'];
require_once "connect.php";
require_once"session.php";
if(isset($_POST['Line1'])){

	  $_SESSION['Line1'] = $_POST['Line1'];
      $_SESSION['Line2'] = $_POST['Line2'];
      $_SESSION['Line3'] = $_POST['Line3'];
      $_SESSION['City'] = $_POST['City'];
      $_SESSION['Pincode'] = $_POST['PIN'];
      $_SESSION['State'] = $_POST['State'];
      $_SESSION['Country'] = $_POST['Country'];
$query = "UPDATE `address` SET Line1_ADDR = '$_POST[Line1]', Line2_ADDR = '$_POST[Line2]',Line3_ADDR = '$_POST[Line3]',PinCode_ADDR = $_POST[PIN],State_ADDR = '$_POST[State]',City_ADDR='$_POST[City]', Country_ADDR = '$_POST[Country]' WHERE CUSTOMER_UserName_CUST = '$_SESSION[user]'";
echo $query;
$result = mysql_query($query);
// echo mysql_num_rows($result);
// $row = mysql_fetch_row($result);
// echo $row; 

echo '<script>
      window.location = "myProfile.php"
      
      </script>';
}
else
echo "Bitch";

?>