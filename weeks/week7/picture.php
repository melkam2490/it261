<?php
$people = [
    'Bret_Baier' => [
        'pic1' => 'baie_One of the "normal" ones.',
        'pic2' => 'ba'
    ],
    'Wolf_Blitzer' => [
        'pic1' => 'blit_Been around for many years.',
        'pic2' => 'bli'
    ],
    'Erin_Burnett' => [
       
        'pic1' => 'dunc_White House Correspondent.',
        'pic2' => 'dun'
    ],
    'Jericka_Duncan' => [ 
      'pic1' => 'burn_Has her own show on CNN.',
        'pic2' => 'bur'
        
    ],
    'Van_Jones' => [
        'pic1' => 'jone_Always at the big table.',
        'pic2' => 'jon'
    ],
    'Rachel_Maddow' => [
        'pic1' => 'madd_Is interesting.',
        'pic2' => 'mad'
    ],
    'Norah_O\'Donell' => [
        'pic1' => 'odon_Sorry that she has left the building.',
        'pic2' => 'odo'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Picture Exercise</title>
  <style>
   body {
    background-color: #ccc; 
}
h1 {
    text-align: center; 
    color: green;      
}

    .right {
        text-align: right; 
    }
    .right img {
        width: 100px; 
        height: 100px; 
    }
    td {
        padding: 10px; 
    }
  </style>
</head>
<body>
  <h1> Week 7 picture exercise</h1>
  <table>
<?php foreach($people as $name => $images): ?>
    <tr>
      <!-- Left-side image (type 1) -->
      <td>
        <img src="images/<?php echo substr($images['pic1'], 0, 4); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>" width="100" height="100">
      </td>

      <!-- Name -->
      <td><?php echo str_replace('_', ' ', $name); ?></td>
      
      <!-- Description -->
      <td><?php echo substr($images['pic1'], 5); ?></td>
      
      <!-- Right-side image (type 2) -->
      <td class="right">
        <img src="images/<?php echo substr($images['pic2'], 0, 4); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>" width="400" height="400">
      </td>
    </tr>
<?php endforeach; ?>
  </table>
</body>
</html>
