<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency PHP Form with drop down and select options</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <fieldset>
      <label>NAME</label>
      <input type="text" name="name">

      <label>EMAIL</label>
      <input type="email" name="email">

      <label>How many do you have?</label>
      <input type="number" name="amount">

      <!-- Radio button for currency selection -->
      <ul>
        <label>Choose your currency:</label>
        <li><input type="radio" name="currency" value="0.017"> Rubles</li>
        <li><input type="radio" name="currency" value="0.76"> Canadian Dollars</li>
        <li><input type="radio" name="currency" value="1.15"> Pounds</li>
        <li><input type="radio" name="currency" value="1.00"> Euros</li>
        <li><input type="radio" name="currency" value="0.0074"> Yen</li>
      </ul>

      <label>Please choose your bank:</label>
      <select name="bank">
        <option value="" null>Select One!</option>
        <option value="boa">Bank of America</option>
        <option value="chase">Chase Bank</option>
        <option value="banner">Banner Bank</option>
        <option value="wells">Wells Fargo</option>
        <option value="becu">Boeing Credit Union</option>
      </select>

      <input type="submit" value="Convert it">

      <p><a href="">Reset it!</a></p>
    </fieldset>

  </form>

  <?php
    // Handling form submission
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      if(empty($_POST['name'])){
        echo '<p class="error">Please enter your name!</p>';
      }
      if(empty($_POST['email'])){
        echo '<p class="error">Please enter your email!</p>';
      }
      if(empty($_POST['amount'])){
        echo '<p class="error">Please enter the amount!</p>';
      }
      if(empty($_POST['currency'])){
        echo '<p class="error">Please select your currency!</p>';
      }
      if($_POST['bank'] == null){
        echo '<p class="error">Please choose your bank institution!</p>';
      }

      // If all fields are set and not empty
      if(isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['amount']) && !empty($_POST['currency']) && $_POST['bank'] != null) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $bank = $_POST['bank'];
        $dollars = $amount * $currency;

        echo '<div class="box">
                <h2>Hello ' . $name . '</h2>
                <p>You now have $' . floor($dollars) . ' American <b>dollars</b>, and we will email you at ' . $email . ' with your information. We will also deposit your funds at <b>' . ucfirst($bank) . ' Bank</b>.</p>
              </div>';
      }
    }
  ?>
</body>
</html>
