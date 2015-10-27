<?php
session_start();
echo '<script src="Scripts/jquery-1.9.1.min.js"></script>';
if($_SESSION['loggedin'] == 1)
{
  $userid = $_SESSION['user'];

  $result  = mysql_query("SELECT UserName_CUST, FName_CUST FROM CUSTOMER WHERE UserName_CUST = $userid");
  
  $row = mysql_fetch_row($result);

  $_SESSION['name'] = $row[1];
  //echo  "<script> alert(\"$row[0]\")</script>";

}
else 
{
  $_SESSION['loggedin'] = 0;
  $_SESSION['user'] = "Anon";
  $_SESSION['name'] = "Anon";
}

?>
