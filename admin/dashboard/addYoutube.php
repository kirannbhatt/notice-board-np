<?php
  require '../../config/connect.php';
  $err = [];
  $result='';

  if(isset($_POST['submitY'])) {
    if(isset($_POST['url']) && !(empty($_POST['url']))) {
      $url = $_POST['url'];
    } else {
      $err['url'] = "Enter headline url";
    }
    if(isset($_POST['description']) && !(empty($_POST['description']))) {
      $description = $_POST['description'];
    } else {
      $err['description'] = "Enter headline description";
    }

    if(count($err) == 0) {
      $sql = "INSERT INTO `tbl_youtub` (`id`, `Description`, `Url`) VALUES (NULL, '$description', '$url')";

      $result = mysqli_query($conn, $sql);
    }
  }

?>

<div class="card" style="padding: 15px;margin-top:15px;">
  <form action="" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label for="youtubeFormUrl">Youtube Embed Url</label>
      <input type="text" class="form-control" name="url" id="youtubeFormUrl" placeholder="Youtube Embed Url">
    </div>
    <div class="form-group">
      <label for="youtubeFormDesc">Youtube Description</label>
      <input type="text" class="form-control" name="description" id="youtubeFormDesc" placeholder="Youtube Description">
    </div>
    <button class="btn btn-success text-uppercase" type="submit" name="submitY">Add</button>
  </form>
</div>