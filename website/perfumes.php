<?php
// Include the database configuration file
include('config.php');
include('./includes/header.php');
?>

    <main>
<?php
// Define the SQL query
$sql = 'SELECT * FROM perfumes';

// Establish the database connection
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

// Execute the query
$result = mysqli_query($iConn, $sql) 
    or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

// we have a row which translate into an arry
// if OUR RESULT IS GRATER THAN  0, WE AR HAPPY
if (mysqli_num_rows($result) > 0) {
  // we are going to while loop
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<h2> Created by: ' . $row['name'] . '</h2>';
    echo '<ul>';
    echo '<li> Perfumes Brand: ' . $row['brand'] . '</li>';
    echo '<li> Fragrance Type: ' . $row['fragrance_type'] . '</li>';
    echo '<li> Sex: ' . $row['sex'] . '</li>';
    echo '<li> Release Year:: ' . $row['launch_year'] . '</li>';
    echo '</ul>';
    echo '<p>For more information about brand perfumes ' . $row['name'] . ' ,Click <a href="project.php?id=' . $row['id'] . '"> here</a></p>';
  
}
//end while loop
} //end if statement
else {
    echo "No records found.!!";
}
//we need to relase the server

@mysqli_free_result($result);
//after every thing oky  Close the database connection
mysqli_close($iConn);
?>
</main>
<aside>


</aside>
</div>
<!-- end wrapper -->
 <?php
 include('./includes/footer.php');
?>
