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
      // echo "Fuck";
      // echo "<script> alert('$_SESSION[user]')</script>";

      $result = mysql_query("SELECT FName_CUST,LName_CUST,DOB_CUST,Gender_CUST,Phone_CUST,Email_CUST,ProfilePicPath_CUST FROM CUSTOMER WHERE UserName_CUST = '$row[1]'");
      $row = mysql_fetch_row($result);

      $_SESSION['Fname'] = $row[0];
      $_SESSION['Lname'] = $row[1];
      $_SESSION['DOB'] = $row[2];
      $_SESSION['Gender'] = $row[3];
      $_SESSION['Phone'] = $row[4];
      $_SESSION['Email'] = $row[5];
      $_SESSION['Password'] = $pass;
      $_SESSION['ProfilePic'] = $row[6];
      $result = mysql_query("SELECT * FROM `address` WHERE CUSTOMER_UserName_CUST ='$uName'");
      $row = mysql_fetch_row($result);

      $_SESSION['Line1'] = $row[0];
      $_SESSION['Line2'] = $row[1];
      $_SESSION['Line3'] = $row[2];
      $_SESSION['City'] = $row[3];
      $_SESSION['Pincode'] = $row[4];
      $_SESSION['State'] = $row[5];
      $_SESSION['Country'] = $row[6];



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