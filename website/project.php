<?php
// Include the database configuration file
include('config.php');

// Check if 'id' is set and is numeric
if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
  header('Location: perfumes.php');
  exit();
}

$sql = 'SELECT * FROM perfumes WHERE id =' . $id . ' ';

// Establish the database connection
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

// Execute the query
$result = mysqli_query($iConn, $sql) 
    or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

// If we have a row (result), proceed
if (mysqli_num_rows($result) > 0) {
    // Fetch the data and assign values
    while ($row = mysqli_fetch_assoc($result)) {
        $name = stripcslashes($row['name']);
        $brand = stripcslashes($row['brand']);
        $fragrance_type = stripcslashes($row['fragrance_type']);
        $sex = stripcslashes($row['sex']);
        $launch_year = stripcslashes($row['launch_year']);
        $notes = stripcslashes($row['notes']);
        // We will add a column for feedback if needed
        $feedback = '';
    }
} else {
    // If no result is found, show feedback message
    $feedback = 'Ummm, something went wrong!!';
}

// Close the database connection
mysqli_close($iConn);

include('./includes/header.php');
?>

<main>
    <h1>Welcome to Our Top Ten Perfumes View Page</h1>
    <h2>Introduction: <?php echo $brand; ?></h2>

    <?php if (!empty($feedback)): ?>
        <p><?php echo $feedback; ?></p>
    <?php endif; ?>
</main>

<aside>
    <!-- Add any additional content in the aside section if needed -->
</aside>

<?php
include('./includes/footer.php');
?>
