<?php 
    require_once "include/header.php";
?>

<h1>Success</h1>
<h1><?php echo $_GET['firstname'];?></h1>
<h1><?php echo $_GET['lastname'];?></h1>
<h1><?php echo $_GET['email'];?></h1>

<?php
    require_once "include/footer.php";
?>