<?php
  require '../../config/connect.php';
  $err = [];
  $result = '';

  if(isset($_POST['submitA'])) {
    if(isset($_POST['description']) && !(empty($_POST['description']))) {
      $description = $_POST['description'];
    } else {
      $err['description'] = 'Enter description';
    }
    if(isset($_FILES['image'])) {
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_exts = (explode('.',$file_name));
      $file_ext = end($file_exts);

      $extensions = array('jpg', 'jpeg', 'png');

      if(in_array($file_ext, $extensions) == false) {
        $err['image'] = "Choose valid image";
      }

      if($file_size > 4097152) {
        $err['image_size'] = "file size must be under 4MB";
      }

      if(empty($err) == true) {
        move_uploaded_file($file_tmp, '../images'.$file_name);
        $image = basename($_FILES['image']['name']);
      }
    }

    if(count($err) == 0) {
      $sql = "INSERT INTO `tbl_activities` (`id`, `description`, `file`) VALUES (NULL, '$description', '$image')";

      $result = mysqli_query($conn, $sql);
    }

  }

?>

<div class="card" style="padding: 15px;margin-top:15px;">
  <form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
  <?php
    if($result) {
      echo '<div class="alert alert-success" role="alert">
      Data added succesfully
    </div>';
    }
  ?>
    <div class="form-group">
      <label for="Description">Description</label>
      <input type="text" class="form-control" name="description" id="Description" placeholder="Description">
      <?php
        if(isset($err['description'])) {
          echo '<div class="alert alert-danger" role="alert">'.$err['description'].' </div>';
        }
      ?>
    </div>
    <div class="form-group">
      <label for="image">File</label>
      <input type="file" class="form-control-file" name="image" id="image" placeholder="File">
      <?php
        if(isset($err['image'])) {
          echo '<div class="alert alert-danger" role="alert">'.$err['image'].' </div>';
        }
      ?>
    </div>
    <button class="btn btn-success text-uppercase" type="submit" name="submitA">Add</button>
  </form>
</div>