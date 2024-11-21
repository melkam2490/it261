<?php
 include('server.php');
// eventually we will be connectting to our header include
include('./includes/header.php');

?>
<div id="wrapper">
<h1 class="center">Register today!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
    <!-- First name, last name, email, username, password1, password2 -->
    <label>First name</label>
<input type="text" name="first_name" value="<?php echo isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : ''; ?>">

<label>Last name</label>
<input type="text" name="last_name" value="<?php echo isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : ''; ?>">

<label>Email</label>
<input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

<label>Username</label>
<input type="text" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">

<label>Password</label>
<input type="password" name="password1" value="<?php echo isset($_POST['password1']) ? htmlspecialchars($_POST['password1']) : ''; ?>">

<label>Confirm your Password</label>
<input type="password" name="password2" value="<?php echo isset($_POST['password2']) ? htmlspecialchars($_POST['password2']) : ''; ?>">

    <button type="submit" name="reg_user" class="btn">Register</button>
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
</fieldset>
</form>

<!-- end my wrapper -->
<p class="center"> Already a member? <a href="login.php">Please login Here!</a></p>
<?php

include('errors.php');?>


</div>
<?php
include('./includes/footer.php');

?>