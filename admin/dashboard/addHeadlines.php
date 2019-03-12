<?php
  require '../../config/connect.php';
  $err = [];
  $result='';

  if(isset($_POST['submitH'])) {
    if(isset($_POST['description']) && !(empty($_POST['description']))) {
      $description = $_POST['description'];
    } else {
      $err['description'] = "Enter headline description";
    }

    if(count($err) == 0) {
      $sql = "INSERT INTO `tbl_headlines` (`id`, `description`) VALUES (NULL, '$description')";

      $result = mysqli_query($conn, $sql);
    }
  }

?>
<div class="card" style="padding: 15px;margin-top:15px;">
  <form action="" method="post" accept-charset="utf-8">
  <?php
    if($result) {
      echo '<div class="alert alert-success" role="alert">
      Data added succesfully
    </div>';
    }
  ?>
    <div class="form-group">
      <label for="formGroupExampleInput">Headline Description</label>
      <input type="text" class="form-control" name="description" id="headlineDesc" placeholder="Headline Description">
      <?php
        if(isset($err['description'])) {
          echo '<div class="alert alert-danger" role="alert">'.$err['description'].' </div>';
        } 
      ?>
    </div>
    <button class="btn btn-success text-uppercase" type="submit" name="submitH">Add</button>
  </form>
</div>