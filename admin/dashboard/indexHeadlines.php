<?php
    require('./adminHeader.php');
?>
<div class="container">
    <h3 class="alert alert-primary" style="margin-top: 5px;text-align: center;">मुख्य समाचार</h3>

<?php
    require('./addHeadlines.php');
    echo "<hr/>";
    require('./viewHeadlines.php');
?>

</div>
<?php
    require('./adminFooter.php');
?>