<?php
  require_once './config/connect.php';

  $sql = "SELECT * FROM `tbl_youtub` ORDER BY id DESC LIMIT 1";

  $result = mysqli_query($conn, $sql);

  $data = mysqli_fetch_assoc($result);
?>



<div class="col-sm-7" style="margin-top: 15px;">
    <div class="alert alert-danger">
      <h4>भी.न.पा. कार्यालयका कार्यक्रमहरूका केही झलकहरू</h4>
    </div>
    <div class="card">
      <iframe height="450" src="<?php echo $data['Url'] ?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </div> <!-- col-sm-7  -->