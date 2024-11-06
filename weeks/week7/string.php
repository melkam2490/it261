<?php
  // The original statement with leading space
  $statement = 'Presently, I am reading the looming Tower';
echo $statement;
echo '<br>';
  echo substr($statement, 0);
  echo '<br>';
  echo substr($statement, 1);
  echo '<br>';
  echo substr($statement, 2);
  echo '<br>';
  echo substr($statement, 10);
  echo '<h2>Now, I would like to display jist the words - I am reding</h2>';
  echo substr($statement, 11, 12);
  echo '<h2>Now, I would like to display jist the words - I am reding</h2>';
  echo '<h2>What if would like to display loming</h2>';
  echo substr($statement, -13 , 9);
  echo '<br>';
  echo substr($statement, 4, 12);
  echo '<br>';
  echo substr($statement, -20, 2);
  echo '<h2>Now for the str_replace function </h2>';

  $statement2=' Hulu\'s  rendtion of looming Tower is based on the book nameed the looming Tower!';

  echo str_replace('the', 'The', $statement2);