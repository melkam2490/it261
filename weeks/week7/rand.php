<?php
// our rand function

// we are going to play with dice

$dice=rand(1,6);
echo '<p>'.$dice.'</p>';

// let play with two dice
$dice1= rand(1,6);
$dice2=rand(1,6);
echo '<p> '.$dice1. 'and'.$dice2.'<p>';

echo '<h2> let\'s add some if else statements!</h2>';
// if we throw a double double 6 we will big 
// if we jist throw a double, we will still win
//otherwise no doule , no win

$dice1a= rand(1,6);
$dice2a=rand(1,6);
if($dice1a==6 && $dice2a==6){
  echo '<h2> You won big!! YAY!!!s</h2>';

}
elseif($dice1a!= 6 && $dice2a!= 6 && $dice1a==$dice2a){
  echo '<h2> You still won !!You had a good day!!</h2>';

}
else{
 echo '<b>Dice 1:</b>'.$dice1a.'<b> Dice 2:</b>'.$dice2a.'';
  echo '<h2>Sorry, you did not win</h2>';
}

echo '<h2> We are going to display our image using the random!!!</h2>';

$photo[0]='Photo1';
$photo[1]='Photo2';
$photo[2]='Photo3';
$photo[3]='Photo4';
$photo[4]='Photo5';
$i=rand(0 ,4);
$selected_image = $photo[$i] . '.jpg';
echo '<img src="./images/' . $selected_image . '" alt="' . $photo[$i] . '" width="70%" height="300">';

echo '<h2> let\'s creat a function!!!</h2>';
function random_images($photo){
  $my_return ='';
  $i=rand(0 ,4);
  $selected_image = $photo[$i] . '.jpg';
  echo '<img src="./images/' . $selected_image . '" alt="' . $photo[$i] . '" width="70%" height="300">';
  return $my_return;
}// end function
 echo random_images($photo);