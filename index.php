<?php
    require_once "include/header.php";
    require_once "database/conn.php"; 
?>

<form method="post"  action="success.php">
    <label for="firstname">First Name</label><br>
    <input type="text" name="firstname" placeholder="First Name" required><br>
    <label for="lastname">Last Name</label><br>
    <input type="text" name="lastname" placeholder="Last Name" required><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" placeholder="Email" required><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" placeholder="submit"> 
</form>

<?php
    require_once "include/footer.php";
?>
    
