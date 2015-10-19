<?php
	require '/config/_connect.php';
	require '/config/_session.php';
	
	if (isset($_POST['user'],  $_POST['pass']))
	{
		$uName = $_POST['user']; $pass = $_POST['pass'];
		// Check whether the user already exists
		// Fixme: SQL Injection Here!
		$result = mysql_query("SELECT PassHash, UserName FROM CUSTOMER WHERE UserName = '$uName'");
		if (mysql_num_rows($result) > 0)
		{
			$row = mysql_fetch_row($result);
			// if (md5($pass) == $row[0])
			if ($pass == $row[0])
			{
				echo("Successfully logged in");
				$_SESSION['loggedin'] = 1;
				$_SESSION['user'] = $uName;
			
				$result = mysql_query("SELECT FName_CUST FROM CUSTOMER WHERE UserName = '$row[1]'");
				$row = mysql_fetch_row($result);
			
				$_SESSION['name'] = $row[0];
			}
			else
			echo "Either Username or Password is Incorrect";
		}
		else
			echo "User Does Not Exists";
	}
	else
	{
		echo("Bitch Please!");
	}
?>