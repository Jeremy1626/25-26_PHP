<?php include 'includes/header.php'; ?>

<form method="post" action="loginAction.php">
    <label for="user">Username</label>
    <input type="text" name="user" id="user" /><br/>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" /><br/>
    <input type="submit" name="login" id="login">
</form>



<?php include 'includes/footer.php'; ?>
