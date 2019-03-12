<?php
  require('../../config/connect.php');

  $sql = "select * from tbl_activities";

  $result = mysqli_query($conn, $sql);

  $data = [];

  if(mysqli_num_rows($result) > 0 ) {
    while($d = mysqli_fetch_assoc($result)) {
      array_push($data, $d);
    }
  }


?>


  <div class="card">
    <table class="table">
      <thead>
          <tr>
              <th>S.N.</th>
              <th>Description</th>
              <th>Image/File</th>
              <th width="150px">Action</th>
          </tr>
      </thead>
      <tbody>
      <?php
       $i = 1;
       foreach($data as $d) { ?>
          <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $d['description'] ?></td>
              <td><img src="../images/<?php echo $d['file'] ?>" class="img-fluid" width="50"></td>
              <td><a href="./editActivity.php?id=<?php echo $d['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
              <a href="./deleteActivity.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-xs">Delete</a></td>
          </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
