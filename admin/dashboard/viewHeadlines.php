<?php
  require '../../config/connect.php';

  $sql = "select * from tbl_headlines";

  $result = mysqli_query($conn, $sql);

  $data = [];

  if(mysqli_num_rows($result) > 0 ) {
    while($d = mysqli_fetch_assoc($result)) {
      array_push($data, $d);
    }
  }


?>

<div id="headlineD">
  <div class="card">
    <table class="table">
      <thead>
          <tr>
              <th>S.N.</th>
              <th>Description</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
      <?php
      $i = 1;
      foreach($data as $d) { ?>
          <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $d['description'] ?></td>
              <td><a href="./editHeadlines.php?id=<?php echo $d['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
              <a href="./deleteHeadlines.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-xs">Delete</a></td>
          </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</div>