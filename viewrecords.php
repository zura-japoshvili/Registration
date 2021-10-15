<?php
    require_once "include/header.php";
    require_once "database/conn.php";

    $results = $crud->getAttendees();
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <?php   while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
    <tbody>
        <td><?php echo $r["attendee_id"] ?></td>
        <td><?php echo $r["firstname"] ?></td>
        <td><?php echo $r["lastname"] ?></td>
        <td><?php echo $r["emailaddress"] ?></td>
        <td><a href="view.php?id=<?php echo $r["attendee_id"] ?>" class="btn btn-primary">View</a></td>
    </tbody>
    <?php }?>
</table>

<?php
    require_once "include/footer.php";
?>