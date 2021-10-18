<?php
    require_once "include/header.php";
    require_once "database/conn.php";

    if(!isset($_GET["id"])){
        echo "<h1>ERROR</h1>";
    }else{
        $id = $_GET["id"];
        $result = $crud->getAttendeeDetails($id);
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $result['firstname']. " " . $result['lastname'];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $result["emailaddress"];?></h6>
        <p class="card-text">ID# <?php echo $result["attendee_id"]?></p>
    </div>
</div>

<?php }?>
<?php
    require_once "include/footer.php";
?>