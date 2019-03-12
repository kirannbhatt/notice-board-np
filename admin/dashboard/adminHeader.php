<?php
  require('../../config/connect.php');
  $sql = "SELECT * from logo LIMIT 1";
  $result = mysqli_query($conn,$sql);

?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../adminStyles.css" >
  <title>Admin-भीमदत्त नगरपालिका नगर कार्यपालिकाको कार्यालय</title>
</head>
<body>

<nav class="navbar navbar-light" style="border-bottom: 1px solid #ccc;">
    <a class="navbar-brand" href="./index.php">
      <img src="../../vendor/images/Clogo.png" height="65px" alt="भीमदत्त नगरपालिका नगर कार्यपालिकाको कार्यालय">
    </a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="./indexActivity.php">प्रमुख गतिविधिहरू</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./indexHeadlines.php">मुख्य समाचार</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./indexYoutube.php">YouTube</a>
        </li>
      </ul>
    <div class="my-2 my-lg-0">
        <span class="nav-item">
            <a class="nav-link" href="./logout.php">Logout</a>
        </span>
    </div>
</nav>