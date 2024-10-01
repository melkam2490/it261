<?php

// Currency conversion rates.
$ruble_rate = 0.017;
$pound_rate = 1.15;
$canadian_rate = 0.076;
$euro_rate = 1.00;
$yen_rate = 0.0074;

// Currency amounts.
$rubles = 10007;
$pound = 500;
$canadian = 5321;
$euros = 1291;
$yen = 4030;

// Converted amounts.
$rubles_converted = $rubles * $ruble_rate;
$pound_converted = $pound * $pound_rate;
$canadian_converted = $canadian * $canadian_rate;
$euros_converted = $euros * $euro_rate;
$yen_converted = $yen * $yen_rate;

// Calculate the total in dollars.
$total = $rubles_converted + $pound_converted + $canadian_converted + $euros_converted + $yen_converted;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency </title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    #wrapper {
        width: 500px;
        margin: 30px auto;
    }
    
    table {
        border: 1px solid red; /* Changed to red */
        border-collapse: collapse;
        width: 500px;
    }

    th, td {
        border: 1px solid red; /* Changed to red */
        padding: 8px;
        color: blue;
    }

    h1, h2, h3 {
        text-align: center;
        color: red;
    }
</style>

</head>
<body>
   <div id="wrapper">
       <h1>After our whirlwind travels, we have returned home with the following currency!</h1>

       <ul>
           <li>Rubles</li>
           <li>Pound Sterling</li>
           <li>Canadian Dollars</li>
           <li>Euros</li>
           <li>Yen</li>
       </ul>

       <h2>What shall we do?</h2>

       <table>
           <tr>
               <th colspan="2">Currency</th>
               <th>Dollars</th>
           </tr>
           <tr>
               <th>Rubles</th>
               <td><?php echo $rubles; ?></td>
               <td>$<?php echo number_format($rubles_converted, 2); ?></td>
           </tr>
           <tr>
               <th>Pound Sterling</th>
               <td><?php echo $pound; ?></td>
               <td>$<?php echo number_format($pound_converted, 2); ?></td>
           </tr>
           <tr>
               <th>Canadian Dollars</th>
               <td><?php echo $canadian; ?></td>
               <td>$<?php echo number_format($canadian_converted, 2); ?></td>
           </tr>
           <tr>
               <th>Euros</th>
               <td><?php echo $euros; ?></td>
               <td>$<?php echo '' .number_format($euros_converted, 2). ''; ?></td>
           </tr>
           <tr>
               <th>Yen</th>
               <td><?php echo $yen; ?></td>
               <td>$<?php echo number_format($yen_converted, 2); ?></td>
           </tr>
           <tr>
               <th colspan="2">Total</th>
               <td>$<?php echo number_format($total, 2); ?></td>
           </tr>
       </table>
   </div>
</body>
</html>
