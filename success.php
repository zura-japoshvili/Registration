<?php 
    require_once "include/header.php";
    require_once "database/conn.php";

    if(isset($_POST["submit"])){
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $emal = $_POST["email"];
        $pass = $_POST["password"];

        $isSuccess = $crud->insert($fname,$lname,$emal,$pass);

        if($isSuccess){
            echo "<h1>Succes</h1>";
        }else{
            echo "<h1>ERROR</h1>";
        }
    }
?>
<h1><?php echo $_POST['firstname']. " " . $_POST['lastname'];?></h1>
<h1><?php echo $_POST['email'];?></h1>

<?php
    require_once "include/footer.php";
?>