

<?php
  require './adminHeader.php';
  require '../../config/connect.php';
  if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
    $sql = "select * from tbl_headlines where id='$id'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0 ) {
      $d = mysqli_fetch_assoc($result);
    }
  }
  $err = [];

  if(isset($_POST['submit'])){
    if(isset($_POST['description']) && !(empty($_POST['description']))) {
      $description = $_POST['description'];
    } else {
      $err['description'] = 'Enter description';
    }
    if(count($err) == 0) {

      $sql = "UPDATE `tbl_headlines` SET description='$description' where id='$id'";
      $result = mysqli_query($conn, $sql);
      if($result) {
        header('location: indexHeadlines.php');
      }
    }
  }

?>

<div class="container">
  <form action="" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label>Headline Description</label>
      <input type="text" class="form-control" name="description" value="<?php echo $d['description'] ?>" placeholder="Headline Description">
      <?php
        if(isset($err['description'])) {
          echo '<div class="alert alert-danger" role="alert">'.$err['description'].' </div>';
        } 
      ?>
    </div>
    <button class="btn btn-success text-uppercase" type="submit" name="submit">Edit</button>
  </form>
</div>