<?php
  $server = "localhost";
  $username = "root";
  $password = "root";
  $database = "nagarpalika";

  $conn =  mysqli_connect($server,$username, $password, $database);

  if(!$conn) {
    die("Connection failed: " );
  }
?>