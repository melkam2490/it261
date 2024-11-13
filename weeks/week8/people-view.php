<?php
// do not call out the header yet!!!

// the following information is above the doctype
include('config.php');

// is Get set???
if(isset($_GET['id'])){
  $id = (int)$_GET['id'];
} else {
  header('Location:people.php');
  exit; // Don't forget to stop further execution
}

$sql = 'SELECT * FROM people WHERE people_id=' . $id;

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
  // Fetch the data for this person
  while ($row = mysqli_fetch_assoc($result)) {
    $first_name = stripcslashes($row['first_name']);
    $last_name = stripcslashes($row['last_name']);
    $email = stripcslashes($row['email']);
    $birthdate = stripcslashes($row['birthdate']);
    $occupation = stripcslashes($row['occupation']);
    $blurb = stripcslashes($row['blurb']);
    $details = stripcslashes($row['details']);

    // Possibly add more fields if necessary
  }
} else {
  $feedback = "Houston, we have a problem!";
}

include('./includes/header.php');
?>

<main>
  <h1>Welcome to the People View Page</h1>
  <h2>Introducing: <?php echo $first_name; ?> <?php echo $last_name; ?></h2>
  
  <ul>
    <li><b>First Name: </b><?php echo $first_name; ?></li>
    <li><b>Last Name: </b><?php echo $last_name; ?></li>
    <li><b>Email: </b><?php echo $email; ?></li>
    <li><b>Birthdate: </b><?php echo $birthdate; ?></li>
    <li><b>Occupation: </b><?php echo $occupation; ?></li>
  </ul>

  <p><?php echo $details; ?></p>
  <p> Return to our <a href="people.php"> people page!</a></p>
</main>

<aside>
  <h3>Aside Information: Display Our Person's Image</h3>
  <figure>
  <img src="./images/pic<?php echo $id; ?>.jpg" alt="<?php echo $first_name; ?>" />

<figcaption> <?php echo $blurb;?></figcaption>
  </figure>
</aside>
</div>
<!-- end a wrapper -->


<?php
// Clean up database resources
@mysqli_free_result($result);
@mysqli_close($iConn);

include('./includes/footer.php');


