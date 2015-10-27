<?php

//echo $_POST['Line1'];
require_once "connect.php";
require_once"session.php";
if(isset($_POST['Fname'])){

	  $_SESSION['Fname'] = $_POST['Fname'];
      $_SESSION['Lname'] = $_POST['Lname'];
      $_SESSION['Gender'] = $_POST['Gender'];
      $_SESSION['Phone'] = $_POST['Phone'];
      $_SESSION['DOB'] = $_POST['DOB'];
      $_SESSION['Email'] = $_POST['Email'];
      
 $query = "UPDATE customer SET FName_CUST = '$_POST[Fname]', LNAME_CUST = '$_POST[Lname]', DOB_CUST = '$_POST[DOB]', Email_CUST='$_POST[Email]', Gender_CUST='$_POST[Gender]', Phone_CUST = $_POST[Phone] where UserName_CUST = '$_SESSION[user]'";

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