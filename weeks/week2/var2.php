<?php
// Construction
// Operators - Assignment Operators
// Some Present Function
// Arrays

$name = 'Melkam';
$first_name = 'Melkam';
$last_name = 'Worku';


echo '<br>';

// Concatenating the last name to the name
$name = 'Melkam';
$name .= ' Worku';
echo $name;
echo '<br>';
$color = 'red';
echo $color; 
echo '<br>';

echo 'Melkam\'s favorite color is '.$color. '.';

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;
echo '<br>';
$x = 20;
$x +=5;
echo $x;


echo '<br>';

$X = 100;
$x *=10;
echo $X;
echo '<br>';
$x = 100;
$x /=10;
echo $x;
echo '<br>';
$X = 100;
$X -= 10;
echo $X; 
echo '<br>';

$product = 120;
echo '<h3> Our product , Quantity and tax exercises</h3>';
$quantity = 5;
$total = $quantity * $product;
$total *= 1.097;
echo $total;
echo '<br>';
echo '<h4>We Would like our amout to reflect 2 decimal places---- We are thinking about flats and a new function - - number_format()</h34';
echo '<br>';
$product = 120;// is our integer.
$quantity = 5;
$total = $quantity * $product;
$total *= 1.105;
$total_freindly = number_format($total, 2);
echo $total_freindly;
echo '<br>';
echo '<br>';
echo 'We have a total of <b>$ ' . $total_freindly . '</b> dollars';
echo '<br>';

$product = 120;// is our integer.
$quantity = 5;
$total = $quantity * $product;
$total *= 1.105;
echo 'We have a total of <b> $ ' .number_format($total,2). '<b> dollar';

echo '<br>';
echo '<h3> Our seconde persent function is our date function</h3>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");

echo '<br>';

echo date("l jS\ of  F Y h:i:s A");
echo '<br>';

echo date("l jS  \of  F Y h:i A");


echo '<br>';
// Set the default timezone:
date_default_timezone_set('America/Los_Angeles');
echo date("l jS \of  F Y h:i A");
echo '<br>';

echo '<h3> Time of an array !</h3>';
echo '<h4> Belew an array is an indexed array!</h4>';
// can we echo an array ? Np we can not.
$fruit[] = 'Banana';
$fruit[] = 'orange';
$fruit[] = 'orange';
$fruit[] = 'cherries';
$fruit[] = 'Kiwie';
$fruit[] = 'Melon';

// To print the entire array in a readable format
echo $fruit[3];
echo '<br>';

// Here is another way to create an array
$fruit = array(
    'Banana',
    'orange',
    'Melon',  
    'cherries'
);

// Accessing the second element (index 1)
echo $fruit[1]; // Outputs: orange
echo '<br>';
$fruit = array(
    'Banana',
    'orange',
    'Melon',  
    'cherries'
);
print_r($fruit);

echo '<br>';
var_dump($fruit);
echo '<br>';
echo '<h3> Now we have an  associative array</h3>';
//in real world we need Nav bar

$nav = array (
'index.php' => 'Home',// index is the key value and home is the value'
'about.php' => 'About',
'dayly.php' => 'Daily',
'Project.php' => 'Project',
'contact.php' => 'Contact',
'gallery.php' => 'Gallery'
);
echo '<pre>';

var_dump($nav);
echo '</pre>';

?>
