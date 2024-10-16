<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Celsius to Fahrenheit Converter</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
  <h1>Celsius to Fahrenheit Converter</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
      <label>Enter your Celsius value</label>
      <input type="number" name="cel" step="0.01" required>
      <input type="submit" value="Convert it">
    
    </fieldset>
    <p><a href="">Reset</a></p>
  </form>
  <?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['cel'])) {
    $cel = $_POST['cel']; // Initialize $cel by retrieving the input value from the form
    $cel_int = intval($cel); // Convert the Celsius value to an integer and store it in $cel_int
    $far = ($cel_int * 9/5) + 32; // Convert Celsius to Fahrenheit

    // Check if the input value is empty
    if ($cel == NULL) {
      echo '<p>Please fill out the Celsius value!</p>'; 
    } elseif ($far <= 32) {
      echo '' . $cel_int . ' degrees Celsius equals ' . $far . ' Fahrenheit degrees, and it is cold outside.';
    } elseif ($far <= 40) {
      echo '' . $cel_int . ' degrees Celsius equals ' . $far . ' Fahrenheit degrees, and it is getting warmer.';
    } elseif ($far <= 50) {
      echo '' . $cel_int . ' degrees Celsius equals ' . $far . ' Fahrenheit degrees, and it is warm.';
    } elseif ($far <= 60) { 
      echo '' . $cel_int . ' degrees Celsius equals ' . $far . ' Fahrenheit degrees, and it is sweating hot.';
    }
    elseif ($far <= 75) { 
      echo '' . $cel_int . ' degrees Celsius equals ' . $far . ' Fahrenheit degrees, and it is sweating hot and we have to gonig park.';
    }
    elseif ($far <= 75) { 
      echo '' . $cel_int . ' degrees Celsius equals ' . $far . ' Fahrenheit degrees, and it is sweating hot and we have to beach.';
    }
    else{
      echo '' . $cel_int . ' degrees Celsius equals ' . $far . ' Fahrenheit degrees, we are in the beach.';
    }
  }
}
?>




</body>
</html>
