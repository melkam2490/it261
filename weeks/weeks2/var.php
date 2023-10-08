<?php
$name="melkam";
$name='Hatties';
echo $name;

$body_temp= 98; // aninteger
$body_temp_new=98.6;

echo '<br>';

echo $body_temp;

echo '<br>';

echo $body_temp_new;
echo '<br>';

echo " My name is $name!";
echo '<br>';

echo  'My name is '.$name.'!';
echo '<br>';
echo 'The normal body tempretur of human being body is '.$body_temp_new.' ';

echo '<br>';

$name='Sharon';
echo $name;

echo '<br>';
$x = 20;
 
$y = 5;
 
$z = $x + $y; 
echo $z;
// I am using the term"assigned vs equale

echo '<br>';
$z=$x * $y;
echo $z;

echo '<br>';
$z=$x / $y;
echo $z;

echo '<br>';
$first_name= 'Melkam';
 
$last_name='Worku';
 
echo $first_name.' '.$last_name;

echo '<br>';

echo"My full name is $first_name $last_name";

echo'My full name is .$first_name .$last_name';
// concattention
// oprators
// some preset
// array
echo '<br>';
$color='red';
echo $color;


echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;


echo '<br>';
$x = 20;
$x += 5;
echo $x;



echo '<br>';

$x = 100;
$x *= 10;
echo $x;

echo '<br>';
echo '<h3>  Our product , quantity and tax exercise</h3>';

echo '<br>';

$product = 120;
$quantity = 5;

$total = $product * $quantity;
$total *= 1.097;
 
echo $total;




echo '<br>';

$product = 120;
$quantity = 5;

$total = $product * $quantity;
$total *= 1.098;
 echo 'We have a total of <b>$' .number_format($tqtal,2).'<b> dollars';
 echo '<h3> Our second perset  function is our date function</h3>';

 // Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date_default_timezone_set('America/Loa_Angeles');

echo ' <h3> Time to an array</h3>';
echo ' <h4> Below index </h4>';

echo '<br>';
$nav = array(
    'index.php'=>'Home',
   'index.php'=>'About',
   'daily.php'=>'Dayily',
   'contact.php'=>'Contact',
   'gallary.php'=>'Gallar',
  
);
   echo '<pre>';
   var_dump($nav);
   echo '</pre>';
//    index is the key








 
