<?php
// if statement
// if else statement
// if elseif statement

$temp = 50;

if($temp == 60) {
    // the code will go here
    echo 'It is a semi-warm day';
} else {
    // Add additional logic here if needed
    echo 'It is getting a warm day!';
}

echo '<br>'; // Corrected the line break

$new_temp = 99;

if($new_temp <= 60) {
    echo 'It is not a very warm day!';
}
elseif($new_temp <= 70) {
    echo 'It\'s a very cold day! Wear a jacket.';
}
elseif($new_temp <= 80) {
    echo 'We might be going to the beach.';
}
else {
    echo 'We will <b>definitly</b> go to beach!';
}
echo '<br>';
echo '<h2> This exercise will be about a salary, a bouns and sales</h2>';

// a salary of 95000 - annual 
// sales need to be above 100000, you will start making bouns!!
// 100000 = 5%
//120000 = 10%
// 140000 = 15%
// 150000 = 20%
 

$salary = 95000;
$sales = 120000;

// if sales is equal to or less than 99999, then you do not receive any bonus
// if sales is equal to or less than 119999, then will receive 5%
// if sales is equal to or less than 139999, they will receive 10%
// if sales is equal to or less than 149999, they will receive 15%
// if sales is above 149999, they will receive 20%

if ($sales <= 99999) {
    echo 'Sorry, you did not make your bonus!';
}
elseif ($sales <= 119999) {
    $salary *= 1.05;
    echo 'Congratulations! You received a 5% bonus, and your salary is:- ';
    echo '<b> $ ' .number_format ($salary, 2). ' dollars </b>';
    
}

elseif ($sales <= 139999) {
    $salary *= 1.10;
    echo 'Congratulations! You received a 10% bonus, and your salary is:- ';
    echo '<b> $ ' .number_format ($salary, 2). ' dollars </b>';
    
}

elseif ($sales <= 149999) {
    $salary *= 1.15;
    echo 'Congratulations! You received a 15% bonus, and your salary is:- ';
    echo '<b> $ ' .number_format ($salary, 2). ' dollars </b>';
    
}

else {
    $salary *= 1.20;
  
    echo 'Awesome! You made a 20% bonus, and your salary is:- ';
    echo '<b> $ ' .number_format ($salary, 2). ' dollars </b>';
    
}
?>
