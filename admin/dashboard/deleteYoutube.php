<?php 

  if(isset($_GET['id'])) {
    require '../../config/connect.php';
    
    $id = $_GET['id'];
    $sql = "DELETE from tbl_youtub where id = '$id'";
    

    $result = mysqli_query($conn,$sql);

    if($result) {
      header('location: indexYoutube.php');
    } else {
      echo 'Failed to delete';
    }
  }

?>