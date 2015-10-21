<?php
session_start();
$_SESSION['loggedin'] = 0;
echo '<script>
      window.location = "index.php"
      </script>';
?>