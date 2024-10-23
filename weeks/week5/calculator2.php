<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Calculator</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
      <label>Name</label>
      <input type="text" name="name">
   
      <label>Total miles driving?</label>
      <input type="number" name="mile">

      <label>How fast do you typically drive? (mph)</label>
      <input type="number" name="speed">

      <label>How many hours per day do you plan to drive?</label>
      <input type="number" name="day">

      <label>Price of Gas per Gallon:</label>
      <ul>
        <li><input type="radio" name="price" value="3"> $3.00</li>
        <li><input type="radio" name="price" value="4"> $4.00</li>
        <li><input type="radio" name="price" value="5"> $5.00</li>
      </ul>

      <label>Select Fuel Efficiency:</label>
      <select name="efficiency">
        <option value="">Select One!</option>
        <option value="10">Terrible (10 mpg)</option>
        <option value="20">It's Okay (20 mpg)</option>
        <option value="30">Good (30 mpg)</option>
        <option value="40">Great (40 mpg)</option>
      </select>

      <input type="submit" value="Calculate">
      <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Reset it!</a></p> <!-- Correct Reset Link -->
    </fieldset>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Checking if fields are empty
    if (empty($_POST['name'])) {
      echo '<p class="error">Please enter your name!</p>';
    }
    if (empty($_POST['mile'])) {
      echo '<p class="error">Please enter your total miles!</p>';
    }
    if (empty($_POST['speed'])) {
      echo '<p class="error">Please enter your speed!</p>';
    }
    if (empty($_POST['day'])) {
      echo '<p class="error">Please enter how many hours per day you plan to drive!</p>';
    }
    if (empty($_POST['price'])) {
      echo '<p class="error">Please select a gas price!</p>';
    }
    if (empty($_POST['efficiency'])) {
      echo '<p class="error">Please choose your fuel efficiency!</p>';
    }

    // If all fields are filled, proceed with calculations
    if (isset($_POST['name'],
        $_POST['mile'] ,
        $_POST['speed'],
        $_POST['day'] ,
        $_POST['price'],
        $_POST['efficiency'])) {

      $name = $_POST['name'];
      $mile =  $_POST['mile'];
      $speed = $_POST['speed'];
      $day = $_POST['day'];
      $price =  $_POST['price'];
      $efficiency =$_POST['efficiency'];

      // Perform calculations
      $totalGallons = $mile / $efficiency;
      $totalCost = $totalGallons * $price;
      $totalHours = $mile / $speed;
      $totalDays = $totalHours / $day;

      // Display the result
      echo '<div class="box">
        <h2>Hello ' . htmlspecialchars($name) . ',</h2>
        <p>You will be traveling a total of ' . number_format($totalHours, 2) . ' hours and taking ' . number_format($totalDays, 2) . ' days.</p>
        <p>You will be using ' . number_format($totalGallons, 2) . ' gallons of gas costing you $' . number_format($totalCost, 2) . '.</p>
      </div>';
    }
  }
  ?>
</body>
</html>
