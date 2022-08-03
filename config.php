<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'backup_utility');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  $conn->set_charset("utf8");
  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>