<?php
  require_once './config/connect.php';

  $sql = "select * from tbl_headlines";

  $result = mysqli_query($conn, $sql);
  
  $data = [];

  if(mysqli_num_rows($result) > 0) {
    while($d=mysqli_fetch_assoc($result)) {
      array_push($data, $d);
    }
  }
?>


<div class="notice sticky">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12 padding-0">
         <div class="flash-box hidden-xs">
           <p>मुख्य समाचार</p>
         </div>
       </div>
       <div class="col-lg-10 col-md-9 col-sm-10 col-xs-12">
        <marquee scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
            <ul class="list-inline">
              <?php foreach($data as $d) { ?>
              <li class="list-inline-item"><?php echo $d['description']; ?></li>
              <?php } ?>
            </ul>
          </marquee>
       </div>
     </div>
   </div>
 </div> <!-- notice sticky-->