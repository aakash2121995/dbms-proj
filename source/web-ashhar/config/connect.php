<?php

error_reporting(0);

define('DB_HOST', 'localhost');
define('DB_NAME', 'jmicart');
define('DB_USERNAME', 'jmicart@localhost');
define('DB_PASSWORD', '1234');

// Connect and Select Database
mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die('Database Error: Connection Failed'.mysql_error());
mysql_select_db(DB_NAME) or die('Database Error: DB to Load'.mysql_error());

?>