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
        $top = stripcslashes($row['top']);
        $middle = stripcslashes($row['middle']);
        $base = stripcslashes($row['base']);
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
    <h2>Brand Name: <?php echo $brand; ?></h2>

    <ul>
    <?php 
    echo '<li> <b>Created by: '.$name.'</b></li>';
    echo '<li> <b>Brand Name: '.$brand.'</b></li>';
    echo '<li> <b>Fragrance Type: '.$fragrance_type.'</b></li>';
    echo '<li> <b>Sex: '.$sex.'</b></li>';
    echo '<li> <b>Launch Year: '.$launch_year.'</b></li>';
 
    ?>
</ul>

<p><?php echo $notes;  ?> </p>
<p>Return to our <a href="perfumes.php">Perfumes Page</a></p>
</main>

<aside>
    <h3>This is Our Brand Perfumes Image!</h3>
    <figure>
        <img src="./image2/per<?php echo $id;?>.jpg" alt="Perfume Image">
        <h3>The Three  Layer of in Our Perfume</h3>
        <figcaption>
    <?php 
        echo "<b>Top Notes:</b> " . $top . "<br>";
        echo "<b>Middle Notes:</b> " . $middle . "<br>";
        echo "<b>Base Notes:</b> " . $base;
    ?>
</figcaption>

    </figure>
</aside>

    </div>

<?php
@mysqli_free_result($result);
//after every thing oky  Close the database connection
mysqli_close($iConn);
include('./includes/footer.php');
?>
