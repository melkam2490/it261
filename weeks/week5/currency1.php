<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currency PHP Form</title>
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

      <!-- Time for our radio button that has an additional attribute of value -->
      <label>Please choose your currency: </label>

      <ul>
      <li><input type="radio" name="currency" value="0.017"> Rubles</li>
      <li><input type="radio" name="currency" value="0.76"> Canadian Dollars</li>
      <li><input type="radio" name="currency" value="1.15"> Pounds</li>
      <li><input type="radio" name="currency" value="1.00"> Erous</li>
      <li><input type="radio" name="currency" value="0.0074"> Yen</li>






      </ul>

      <input type="submit" value="Convert it">

      

      <p><a href="">Reset it !</a></p>
     
    </fieldset>

  </form>

  <?php
    //  we will start with server request method
    // then we will ask ourselves if any fields are empty
    // if the fields are not empty, we will elseif they are set

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      // If fields are not empty, process the form
      if(empty($_POST['name']) &&
         empty($_POST['email']) &&
         empty($_POST['amount']) &&
         empty($_POST['currency'])) {
        
        echo '<p class="error"> Please fill all of the fields!! </p>';

      }
       elseif (isset($_POST['name'], 
                      $_POST['email'], 
                      $_POST['amount'], 
                      $_POST['currency'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $dollars = $amount * $currency;

        echo '<div class="box">
                <h2>Hello ' . $name . '</h2>
                <p>You now have $' .floor($dollars) . ' American <b> dollars </b>, and we will email you at ' . $email . ' with your information!</p>
              </div>';
      }
    } // END SERVER REQUEST
?>



</body>
</html>

