<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Calculator</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
  
</head>
<body>
  <form action="" method="POST">
    <fieldset>
      <label>Name</label>
      <input type="text" name="name">
   
      <label>Total miles driving?</label>
      <input type="number" name="mile">

      <label>How fast do you typically drive? (mph)</label>
      <input type="number" name="fast">

      <label>How many hours per day do you plan to drive?</label>
      <input type="number" name="day">

      <label>Price of Gas per Gallon:</label>
      <ul>
        <li><input type="radio" name="price" value="3" > $3.00</li>
        <li><input type="radio" name="price" value="4" > $4.00</li>
        <li><input type="radio" name="price" value="5"> $5.00</li>
      </ul>
  
   

   <label>Select Fuel Efficiency:</label>
<select name="efficiency" required>
  <option value="" disabled selected>Select One!</option>
  <option value="10">Terrible (10 mpg)</option>
  <option value="20">It's Okay (20 mpg)</option>
  <option value="30">Good (30 mpg)</option>
  <option value="40">Great (40 mpg)</option>
</select>

      

      <input type="submit" value="Calculate">
      <p><a href="">Reset it !</a></p>
    </fieldset>
  </form>

  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Checking my empty filed
    if(empty($_POST['name']&&
      $_POST['mile']&&
    $_POST['fast']&&
    $_POST['day']&&
    $_POST['price']&&
  $_POST['efficiency'])) {

      echo '<p class="error">Please fill all of the fields!</p>';
    } else {
      // Declare my form data
      $name = $_POST['name'];
      $mile = $_POST['mile'];
      $fast = $_POST['fast'];
      $day = $_POST['day'];
      $price = $_POST['price'];
      $efficiency = $_POST['efficiency'];

      // Perform calculations
      $totalGallons = $mile / $efficiency;
      $totalCost = $totalGallons * $price;
      $totalHours = $mile / $fast;
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
