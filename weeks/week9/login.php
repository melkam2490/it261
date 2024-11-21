<?php
// Include the server script (which contains the login logic)
include('server.php');
include('./includes/header.php');

// Include errors.php to display any error messages
?>
<div id="wrapper">
<h1 class="center">Our Login Page!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <fieldset>
    <label for="user_name">Username</label>
    <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>">

    <button type="submit" name="login_user" class="btn">Login</button>
    <button type="reset" class="btn">Reset</button>
  </fieldset>
</form>
<p class="center"> Not a member? <a href="regester.php">Please Register Here!</a></p>

<?php

include('errors.php');?>
</div>
<!-- end my wrapper -->

<?php
include('./includes/footer.php');

?>