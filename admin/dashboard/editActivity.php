

<?php
  require './adminHeader.php';
  require '../../config/connect.php';
  if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $sql = "select * from tbl_activities where id='$id'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0 ) {
      $d = mysqli_fetch_assoc($result);
    }
  }
  $err = [];

  if(isset($_POST['submit'])) {
    if(isset($_POST['description']) && !(empty($_POST['description']))) {
      $description = $_POST['description'];
    } else {
      $err['description'] = 'Enter description';
    }
    if(isset($_FILES['image'])) {
      if($_FILES['image']['error'] == 0){
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_exts = (explode('.',$file_name));
      $file_ext = end($file_exts);

      $extensions = array('jpg', 'jpeg', 'png');
      if($file_size > 4097152) {
        $err['image_size'] = "file size must be under 4MB";
      }

      if(empty($err) == true) {
        move_uploaded_file($file_tmp, '../images/'.$file_name);
        $image = basename($_FILES['image']['name']);
      }
    }else {
      $image = $d['file'];
    }
    } 

    if(count($err) == 0) {

      $sql = "UPDATE `tbl_activities` SET description='$description', file='$image' where id='$id'";
      $result = mysqli_query($conn, $sql);
      if($result) {
        header('location: indexActivity.php');
      }
    }

  }

?>

<div class="container">
  <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <div class="form-group">
      <label for="Description">Description</label>
      <input type="text" class="form-control" name="description" id="Description" value="<?php echo $d['description'] ?>" placeholder="Description">
      <?php
        if($err['description']) {
          echo '<div class="alert alert-danger" role="alert">'.$err['description'].' </div>';
        }
      ?>
    </div>
    <div class="form-group">
      <label for="image">File</label>
      <input type="file" class="form-control-file" name="image" id="image" placeholder="File">
      <?php
        if($err['image']) {
          echo '<div class="alert alert-danger" role="alert">'.$err['image'].' </div>';
        }
      ?>
    </div>
    <button class="btn btn-success text-uppercase" type="submit" name="submit">Edit</button>
  </form>
</div>