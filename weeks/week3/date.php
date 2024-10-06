<?php
// date function and and if statement
echo date('Y');

echo '<br>';
echo date('l, F j, Y h:i:A');
echo '<br>';
date_default_timezone_set('America/Los_angeles');

echo '<br>';
echo date('l, F j, Y h:i:A');
echo '<br>';
$name = 'Melkam';
$our_date = date('H:i A');

echo $our_time= date('H:i a ');
//The logic  behined this is, I the time is less than or equal to 11, the it is good mornig
//if the time is less than or equal to 17 which equal to 5, the it is afternoun
//now we will have an else, that will it is evening

if($our_time <=11){
echo '<h2 style"color:yellow">Good Morning '.$name.'</h2>';
echo '<img src="/.images/Mornig.jpeg" alt="sun">';


}
elseif($our_time <=17){
    echo '<h2 style="color:green">Good Afternoon, ' . $name . '</h2>';
    echo '<img src="./images/afternoon.jpeg" alt="sun">';


}

else{
echo '<h2 style= "color:green">Good Evning, '.$name.'</h2>';
echo '<img src="./images/evening.jpeg" alt="sun">';
echo '<p>It is time to sleep!!</p>';


}