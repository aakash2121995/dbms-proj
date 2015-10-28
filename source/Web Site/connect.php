<?php

error_reporting(0);
$_SESSION['loggedin'] = 0;
define('DB_HOST', 'localhost');
define('DB_NAME', 'jmicart');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'mysql/@@$hu0711');

// Connect and Select Database
$inp = mysql_connect(DB_HOST, DB_USERNAME) or die('Database Error: Connection Failed'.mysql_error());
$inp = mysql_select_db(DB_NAME) or die('Database Error: DB to Load'.mysql_error());

require "session.php";

?>