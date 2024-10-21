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

      <!-- Time for our radio button that has an additional attribute of value -->
     
      <ul>
        <label> Choose your bank instuitution</label>
      <li><input type="radio" name="currency" value="0.017"> Rubles</li>
      <li><input type="radio" name="currency" value="0.76"> Canadian Dollars</li>
      <li><input type="radio" name="currency" value="1.15"> Pounds</li>
      <li><input type="radio" name="currency" value="1.00"> Erous</li>
      <li><input type="radio" name="currency" value="0.0074"> Yen</li>


      <label>Please choose your currency: </label>

<select name=" bank">
  <option value="" NULL> Select One!</option>
  <option value="boa" >Bank of America</option>
  <option value="chase" > Chase bank</option>
  <option value="banner" > Banner Bank</option>
  <option value="wells" > Wells Fargo</option>
  <option value="becu" > boeing Credit union</option>




</select>





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

      if(empty($_POST['name'])){
        echo '<p class="error"> Please enter your name!</p>';


      }
      if(empty($_POST['email'])){
        echo '<p class="error"> Please enter your email!</p>';


      }if(empty($_POST['amount'])){
        echo '<p class="error"> Please enter your your amount!</p>';


      }
    }if(empty($_POST['currency'])){
      echo '<p class="error"> Please checke your currency your acurrency!</p>';



    }
    if($_POST['bank']==NULL){
      echo '<p class="error"> Please choose your bank instution!</p>';

    }
 
       if (isset($_POST['name'], 
                    $_POST['bank'],

                      $_POST['email'], 
                      $_POST['amount'], 
                      $_POST['currency'])) {

        $name = $_POST['name'];
        
        $bank = $_POST['bank'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $dollars = $amount * $currency;

        echo '<div class="box">
                <h2>Hello ' . $name . '</h2>
                <p>You now have $' .floor($dollars) . ' American <b> dollars </b>, and we will email you at ' . $email . ' with your information!, as well as deposting your funds at '.$bank.'</p>
              </div>';
      }
    // END SERVER REQUEST
?>



</body>
</html>

