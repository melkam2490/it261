<?php
echo date('Y');
// Our wine list, it should be an array of wines

echo '<h2>This will be the Wine List</h2>';
// we have only the key
$wine = [
    'Chardonnay',
    'Merlot',
    'Sauvignon Blanc',
    'Pinot Noir',
    'Prosecco',
    'Red Blend'
];

// Since we cannot echo the wine array directly, we will use a foreach loop

echo '<ul>';
foreach($wine as $key){
    echo '<li>'.$key.'</li>';
}
echo '</ul>';

'<br>';
echo '<h2>Moveis and show liste</h2>';
// here we have a key and the value
$shows=[
'Apple TV' => 'Severance',
'Apple TV' => 'For All Mainkind',
'Apple TV' => 'Severance',
'Show Time' => 'City on a Hill',
'Show Time' => 'Homeland',
'Movies' => 'Top gun Maverrick'




];

echo '<ul>';
foreach($shows as $key => $value){
    echo '<li><b>'.$key.'</b></li>';
}
echo '</ul>';

?>
