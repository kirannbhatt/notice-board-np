<?php
    require('./adminHeader.php');
?>
<div class="container">
    <h3 class="alert alert-primary" style="margin-top: 5px;text-align: center;">YouTube</h3>

<?php
    require('./addYoutube.php');
    echo "<hr/>";
    require('./viewYoutube.php');
?>

</div>
<?php
    require('./adminFooter.php');
?>