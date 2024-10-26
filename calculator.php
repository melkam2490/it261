<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Calculator</title>
  <link href="css/calculater.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
      <label>Name</label>
      <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

      <label>Total miles driving?</label>
      <input type="number" name="mile" value="<?php if(isset($_POST['mile'])) echo htmlspecialchars($_POST['mile']); ?>">

      <label>How fast do you typically drive? (mph)</label>
      <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>">

      <label>How many hours per day do you plan to drive?</label>
      <input type="number" name="day" value="<?php if(isset($_POST['day'])) echo htmlspecialchars($_POST['day']); ?>">

      <label>Price of Gas per Gallon:</label>
      <ul>
        <li><input type="radio" name="price" value="3" <?php if(isset($_POST['price']) && $_POST['price'] == "3") echo 'checked="checked"'; ?>> $3.00</li>
        <li><input type="radio" name="price" value="4" <?php if(isset($_POST['price']) && $_POST['price'] == "4") echo 'checked="checked"'; ?>> $4.00</li>
        <li><input type="radio" name="price" value="5" <?php if(isset($_POST['price']) && $_POST['price'] == "5") echo 'checked="checked"'; ?>> $5.00</li>
      </ul>

      <label>Select Fuel Efficiency:</label>
      <select name="efficiency">
        <option value="" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '') echo 'selected="selected"'; ?>>Select One!</option>
        <option value="10" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == "10") echo 'selected="selected"'; ?>>Terrible (10 mpg)</option>
        <option value="20" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == "20") echo 'selected="selected"'; ?>>It's Okay (20 mpg)</option>
        <option value="30" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == "30") echo 'selected="selected"'; ?>>Good (30 mpg)</option>
        <option value="40" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == "40") echo 'selected="selected"'; ?>>Great (40 mpg)</option>
      </select>

      <input type="submit" value="Calculate">
      <p><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Reset it!</a></p>
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
    if (isset($_POST['name'] ,
        $_POST['mile'] ,
        $_POST['speed'],
        $_POST['day'],
        $_POST['price'],
        $_POST['efficiency'])) {

      $name = $_POST['name'];
      $mile = $_POST['mile'];
      $speed = $_POST['speed'];
      $day = $_POST['day'];
      $price = $_POST['price'];
      $efficiency = $_POST['efficiency'];

      // calculations
      $totalGallons = $mile / $efficiency;
      $totalCost = $totalGallons * $price;
      $totalHours = $mile / $speed;
      $totalDays = $totalHours / $day;

      echo '<div class="box">
        <h2>Hello ' . htmlspecialchars($name) . ',</h2>
        <p>You will be traveling a total of ' . number_format($totalHours, 2) . ' hours and taking ' . number_format($totalDays, 2) . ' days.</p>
        <p>You will be using ' . number_format($totalGallons, 2) . ' gallons of gas costing you $' . number_format($totalCost, 2) . '.</p>
      </div>';
    }
  }
  ?>
   <footer>
        <ul>
            <li>Copyright &copy; 2024</li>
            <li>All Rights Reserved</li>
            <li><a href="http://localhost/it261/index.php">Web Design by Melkam Worku</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
    </footer>

    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + encodeURIComponent(location.href));
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + encodeURIComponent(location.href));
    </script>
</body>
</html>
