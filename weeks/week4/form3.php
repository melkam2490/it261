<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Form3</title>

  <link href="css/styles.css" type=text/css rel="stylesheet">

</head>
<body>
  <h1> My form3.php</h1>

  <form action="" method="post" >

  <fieldset>
    <label>First Name</label>
    <input type="text" name="first_name">
    <label>Last Name</label>
    <input type="text" name="last_name">
    <label>Email</label>
    <input type="email" name="email">
    <label>Comment</label>
    <textarea name="comment"></textarea>
    <input type="submit" value="send it">
    <p><a href="">Reset!</a></p>
  </fieldset>

  </form>

<?php
// Check if all form fields are set
if (isset($_POST['first_name'], 
$_POST['last_name'], 
$_POST['email'], 
$_POST['comment'])) {

  // Set variables
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  // Check if all fields are empty
  if (empty($_POST['first_name']) && 
  empty($_POST['last_name']) && 
  empty($_POST['email']) && 
  empty($_POST['comment'])) {
  echo ' <p class="error">Please fill out all of the fields </p>';
} else {
    echo '
    <div class="box">
      <h2>Hello ' . $first_name . ' ' . $last_name .!'</h2>
      <p>We have received your <b>Email as</b> ' . $email . ' and we will review your <b>comment</b>.</p>
    </div>';
  }

} // end isset

?>

</body>
</html>
