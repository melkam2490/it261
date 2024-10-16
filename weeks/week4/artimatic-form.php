<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arthimatic Form</title>
  <link href="css/form.css" type=text/css rel="stylesheet">
</head>
<body>
  <h1> Arthimatic Form</h1>
  <form action="" method="post">
    <fieldset>

    <label> Name</label>
    <input type="Text" name="name">

    <label> Phone</label>
    <input type="tel" name="phone">
    <label>How many Lattes?</label>
    <input type="number" name="lattes">

     <label> How many Caoucinos?</label>
    <input type="number" name="caoucinos">
     <label> How many Americano?</label>
    <input type="number" name="americano">
    <label> How many Special Request?</label>
    <textarea name="comments"> </textarea>
    <input type="submit"  value=" Send my order">
    </filedset>
  </form>

<p><a href=""> Reset</a></p>
<?php
// name, tel, phone, lattes, caoupicno, americano comment
date_default_timezone_set('America/Los_Angeles');

$our_time= date('H:i');
if(isset($_POST['name'],
$_POST['phone'],
$_POST['lattes'],
$_POST['caoucinos'],
$_POST['americano'],
$_POST['comments']


)){ //add my if statement regarding fileds that are empty
  if(empty($_POST['name']&&
$_POST['phone']&&
$_POST['lattes']&&
$_POST['caoucinos']&&
$_POST['americano']&&
$_POST['comments']
  ))
{
  echo '<p class="error"> Please fill out all the filed ! </p>';
}
else{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $lattes=$_POST['lattes'];
  $americano=$_POST['americano'];
  $caoucinos=$_POST['caoucinos'];
  $comments=$_POST['comments'];
  $total= $lattes + $americano + $caoucinos;
  // if and else if statement regarding  our time
  if($our_time <= 11){
    $our_time= "Good Mornig";

  }
  elseif($our_time<=17 ){

    $our_time= "Good Afternoon";

  }
  else{
    $our_time="Good Evenig";

  }
  echo '
  
  <div class="box">

  <h2>'.$our_time.' '.$name.' !</h2>
  <p>We have confirming Your order  to this noumber'.$phone.',  totaling '.$total.' beverages:</p>

  <ul>
  <li>'.$lattes.'</li>
   <li>'.$caoucinos.'</li>
   <li>'.$americano.'</li>

  </ul>
  <p> And this is your special<b> request</b>: '.$comments.'</p>
<p> Thank you for choosing our establishment</p>
  </div>
  ';

  
}






}// end isset



?>


</body>
</html>