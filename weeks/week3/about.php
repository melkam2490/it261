<?php
echo date('Y');


echo'<br>';
echo '<h2>Time To our navagation that will again have both a key and a value!</h2>';
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'dayily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallary.php' => 'Galary',
);

echo '<ul>';
foreach($nav as $key => $value){
    echo '<li><a href=" '. $key .' "> '. $value .'</a> </li>';
}
echo '</ul>';
echo'<br>';
echo '<h2> Our navagation will display a diffrent color when on the index.php page</h2>';

// We are going to define a constant which always capitalize with under score name 
 define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
 //We are going to adding an if statemen  - if we are on this_page and it is the index.php page, do smething
 echo '<ul>';
 foreach($nav as $key => $value){
if(THIS_PAGE == $key){
    echo '<li><a style="color:red" href=" '. $key .' "> '. $value .'</a> </li>';
}
else{
    echo '<li><a style="color:green" href=" '. $key .' "> '. $value .'</a> </li>';
}
 } //end foreach
 echo '</ul>';