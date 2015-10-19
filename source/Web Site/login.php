<?php
require 'connect.php';
require 'session.php';
$_SESSION['loggedin'] = 0;
if(isset($_POST['login_username'],  $_POST['login_password']))
{
  $uName = $_POST['login_username']; $pass = $_POST['login_password'];
  // Check whether the user already exists
  // Fixme: SQL Injection Here!
  $result = mysql_query("SELECT PassHash_CUST, UserName_CUST FROM CUSTOMER where UserName_CUST = '$uName' ");

  if (mysql_num_rows($result) > 0)
  {
    $row = mysql_fetch_row($result);
    
    // if (md5($pass) == $row[0])
    if ($pass == $row[0])
    {
      
      $_SESSION['loggedin'] = 1;
      $_SESSION['user'] = $uName;

      $result = mysql_query("SELECT FName_CUST FROM CUSTOMER WHERE UserName = '$row[1]'");
      $row = mysql_fetch_row($result);

      $_SESSION['name'] = $row[0];
      echo '
      <script src="Scripts/jquery-1.9.1.min.js"></script>
      <script>
      window.location = "index.php"
      
      </script>';
      
    }
    else
      //echo "Either Username or Password is Incorrect"
    {
      $_SESSION['incorrect'] = 1;
      echo '<script>
      window.location = "index.php"
      
      </script>';
    }

  }
  else
    {
      $_SESSION['incorrect'] = 1;
      echo '<script>
      window.location = "index.php"
      
      </script>';
    }
    ;
}

?>