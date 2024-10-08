<?php
echo date('Y');
// This file demonstrates for loops and placing your PHP inside your HTML!
// Celsius to Fahrenheit formula: Fahrenheit = (Celsius * 9/5) + 32;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celsius Table</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid lightblue;
        }
        td, th {
            border: 1px solid green;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        h1, h2{
            text-align: center;
            color:green;
            margin:10px 0;
        }
    </style>
</head>
<body>
  <h1>My Celsius/Fahrenheit Table</h1><br>
  <table>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    <?php
    // Loop through Celsius values from 0 to 100, increasing by 5
    for ($cel = 0; $cel <= 100; $cel += 5) {
        $far = ($cel * 9 / 5) + 32;
        echo '<tr>';
        echo '<td>' . $cel . '°C</td>';
        echo '<td>' . $far . '°F</td>';
        echo '</tr>';
    }
    ?>
    
  </table>
  <h2>I  completeed a Kilometer/milagetable My own</h2>
</body>
</html>
