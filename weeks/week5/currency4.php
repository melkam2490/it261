<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency3 PHP Stick</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

        <label for="amount">How many do you have?</label>
        <input type="number" id="amount" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">

        <label>Choose your currency</label>
        <ul>
            <li><input type="radio" name="currency" value="0.017" <?php if(isset($_POST['currency']) && $_POST['currency'] == "0.017") echo 'checked="checked"'; ?>> Rubles</li>
            <li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == "0.76") echo 'checked="checked"'; ?>> Canadian Dollars</li>
            <li><input type="radio" name="currency" value="1.15" <?php if(isset($_POST['currency']) && $_POST['currency'] == "1.15") echo 'checked="checked"'; ?>> Pounds</li>
            <li><input type="radio" name="currency" value="1.00" <?php if(isset($_POST['currency']) && $_POST['currency'] == "1.00") echo 'checked="checked"'; ?>> Euros</li>
            <li><input type="radio" name="currency" value="0.0074" <?php if(isset($_POST['currency']) && $_POST['currency'] == "0.0074") echo 'checked="checked"'; ?>> Yen</li>
        </ul>

        <label for="bank">Please choose your bank:</label>
        <select id="bank" name="bank">
            <option value="" <?php if(!isset($_POST['bank']) || $_POST['bank'] == "") echo 'selected="selected"'; ?>>Select One!</option>
            <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == "boa") echo 'selected="selected"'; ?>>Bank of America</option>
            <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == "chase") echo 'selected="selected"'; ?>>Chase Bank</option>
            <option value="banner" <?php if(isset($_POST['bank']) && $_POST['bank'] == "banner") echo 'selected="selected"'; ?>>Banner Bank</option>
            <option value="wells" <?php if(isset($_POST['bank']) && $_POST['bank'] == "wells") echo 'selected="selected"'; ?>>Wells Fargo</option>
            <option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == "becu") echo 'selected="selected"'; ?>>Boeing Credit Union</option>
        </select>

        <input type="submit" value="Convert it">
        <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Reset it!</a></p>
    </fieldset>
</form>


  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check required fields
    if(empty($_POST['name'])){
      echo '<p class="error">Please enter your name!</p>';
    }
    if(empty($_POST['email'])){
      echo '<p class="error">Please enter your email!</p>';
    }
    if(empty($_POST['amount'])){
      echo '<p class="error">Please enter your amount!</p>';
    }
    if(empty($_POST['currency'])){
      echo '<p class="error">Please choose your currency!</p>';
    }
    if($_POST['bank'] == NULL){
      echo '<p class="error">Please choose your bank institution!</p>';
    }

    // If all fields are filled, process the form
    if (!empty($_POST['name']) && 
        !empty($_POST['email']) && 
        !empty($_POST['amount']) && 
        !empty($_POST['currency']) && 
        !empty($_POST['bank'])) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $bank = $_POST['bank'];
      $amount = floatval($_POST['amount']);
      $currency = floatval($_POST['currency']);
      $dollars = $amount * $currency;

      echo '<div class="box">
              <h2>Hello <b>' . $name . ',</b></h2> 
              <p>You now have <b>$' . number_format($dollars, 2) . ' American dollars,</b> and we will email you at <b>' . $email . '</b> with your information, as well as depositing your funds at <b>' . $bank . ' Bank</b>.</p>
            </div>';

      if ($dollars >= 1000) {
        echo '<b><h2 class="p">I am happy! I have $' . number_format($dollars, 2) . '</h2></b>';
        echo '<div class="video-container">
                <iframe width="591" height="360" src="https://www.youtube.com/embed/64mKX9LkMWU" title="ABBA - Money, Money, Money 𝚜𝚕𝚘𝚠𝚎𝚍" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>';
      } else {
        echo '<b><h2 class="h">I am not happy! I have less than $1000.</h2></b>';
        echo '<div class="video-container">
                <iframe width="591" height="360" src="https://www.youtube.com/embed/viQ_CEiARoE" title="Sad Song || OC Joke Animatic" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>';
      }
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
