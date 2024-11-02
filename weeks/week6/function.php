<?php

// Our function PHP page

function sayHello(){
  echo 'Hello My Function!';
}
sayHello();

echo '<h2>Arithmetic problem - cube</h2>';
function cube($num){
  $cubing = $num * $num * $num;
  echo $cubing;
}
cube(5);

echo '<h2>Area = width * height</h2>';
function area($w, $l){
  $get_area = $w * $l;
  return $get_area;
}
$get_area = area(5, 12);
echo $get_area;

echo '<h2>Celsius Converter</h2>';
function Celsius_Converter($cel){
  $far = ($cel * 9/5) + 32;
  echo $far;
}
Celsius_Converter(100);

echo '<h2>How do we deal with arrays? We are going to be using indexed arrays</h2>';

function area_volume($a, $b, $c){
  $area = $a * $b;
  $volume = $a * $b * $c;
  return array($area, $volume);
}

// Using array indexing
$my_array = area_volume(10, 5, 20);
echo '<b>This is my area: '.$my_array[0].'</b><br>';
echo '<b>This is my volume: '.$my_array[1].'</b><br>';

echo '<h2>Now we will use the list function</h2>';

// Using the list() function
list($area, $volume) = area_volume(5, 10, 20);
echo '<b>This is my area: '.$area.'</b><br>';
echo '<b>This is my volume: '.$volume.'</b><br>';

echo '<h2>Our navigation</h2>';
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Navigation array
$nav = array(
  'index.php' => 'Home',
  'about.php' => 'About',
  'daily.php' => 'Daily',
  'project.php' => 'Project',
  'contact.php' => 'Contact',
  'gallery.php' => 'Gallery'
);

// Navigation function
function make_links($nav) {
  $myreturn = '';
  foreach($nav as $key => $value) {
    if (THIS_PAGE == $key) {
      $myreturn .= '<li><a style="color:red" href="'.$key.'"> '.$value.'</a></li>';
    } else {
      $myreturn .= '<li><a style="color:green" href="'.$key.'"> '.$value.'</a></li>';
    }
  }
  return $myreturn;
}

// Call the function to generate the navigation links



echo '<h2>creat our navgation using with function</h2>';
echo make_links($nav);

echo '<h2>The implode function</h2>';
$cars = array('toyota', 'ford', 'subaru', 'audi', 'bmw', 'mercedes');
$my_cars = implode(',', $cars);
echo $my_cars;

echo '<h2>The logic behind the wines on our form</h2>';
echo '<p>If POST wines is not empty, take POST wines and implode them to create a new variable named $my_wines.</p>';
