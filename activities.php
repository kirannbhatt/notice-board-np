<?php
  require_once './config/connect.php';

  $sql = "select * from tbl_activities";

  $result = mysqli_query($conn, $sql);

  $data = [];

  if(mysqli_num_rows($result) > 0) {
    while($d=mysqli_fetch_assoc($result)) {
      array_push($data, $d);
    }
  }


?>

<div class="col-sm-5" style="margin-top: 15px;">
  <div class="alert alert-danger">
    <h4>प्रमुख गतिविधिहरू</h4>
  </div>
  <div class="card" style="height: 450px;">
    <marquee behavior="scroll" scrollamount="3" direction="up" style="height: 450px;" >

      <div class=" list-group">
      <?php foreach($data as $da) { ?>
      <a href="#" class="list-group-item list-group-item-action">
        <div class="row">
          <div class="col" style="max-width:106px"><img class="img-fluid" src="./images/<?php echo $da['file']; ?>"
              width="106" height="106"></div>
          <div class="col">
            <div class="d-flex w-100 justify-content-between">
              <h6 class="mb-1"><?php echo $da['description']; ?></h6>
            </div>
            <!-- <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p> -->
          </div>
        </div>
      </a>
    <?php } ?>
  </div><!-- list group -->
  </marquee>
</div> <!-- card -->
</div> <!-- col-sm-5  -->