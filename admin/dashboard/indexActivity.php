<?php
    require('./adminHeader.php');
?>
<div class="container">
    <h3 class="alert alert-primary" style="margin-top: 5px;text-align: center;">प्रमुख गतिविधिहरू</h3>
<?php
    require('./addActivity.php');
    echo "<hr/>";
    require('./viewActivity.php');
?>

</div>
<?php
    require('./adminFooter.php');
?>