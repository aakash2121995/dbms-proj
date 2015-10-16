<?php

session_start();

if($_SESSION['loggedin'] == 1)
{
  $userid = $_SESSION['user'];

  $result  = mysql_query("SELECT UserName_CUST, FName_CUST FROM CUSTOMER WHERE UserName = $userid");
  $row = mysql_fetch_row($result);

  $_SESSION['user'] = $row[0];
  $_SESSION['name'] = $row[1];
}
else
{
  $_SESSION['loggedin'] = 0;
  $_SESSION['user'] = "Anon";
  $_SESSION['name'] = "Anon";
}

?>
