<?php 
    require_once "include/header.php";
?>
<h1><?php echo $_POST['firstname']. " " . $_POST['lastname'];?></h1>
<h1><?php echo $_POST['email'];?></h1>

<?php
    require_once "include/footer.php";
?>