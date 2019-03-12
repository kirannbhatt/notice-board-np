<?php 

  if(isset($_GET['id'])) {
    require '../../config/connect.php';
    
    $id = $_GET['id'];
    $sql = "select * from tbl_activities where id='$id'";

    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) > 0 ) {
      $d = mysqli_fetch_assoc($result);

    }
    unlink('../images/'.$d['file']);
    $sql = "DELETE from tbl_activities where id = '$id'";
    

    $result = mysqli_query($conn,$sql);

    if($result) {
      header('location: indexActivity.php');
    } else {
      echo 'Failed to delete';
    }
  }

?>