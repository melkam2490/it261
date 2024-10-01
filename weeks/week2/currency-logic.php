<?php

// Understanding the logic.
// 1 ruble =0.017 dollars
// 1 pound sterling = 1.15 dollars
// 1 canadian dollar = .76
// 1 euro = 1.00 dallars
//  1 yen  = .0074 dallars

// rubles = 10007=117.11
// pound sterlig = 500
//canadian = 5000
//euros = 1200
//yen =2000
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My currency Logic Exercise</title>
    <style>
    
    *{
padding: 0;
margin: 0;
box-sizing: Border-box;

    }

    #wrapper {
        width: 500px;
        margin:30px auto;
    }
    table{

        Border:1px solid green;
        border-collapse:collapes;
        width: 500px; 
    }
    th ,td {
        
        Border:1px solid green;
        padding:8px;
    }

    h1, h2 ,h3{
        text-align: center;

    }
    </style>
</head>
<body>
   <div id= "wrapper">
<h1>After our world -wind travels, we have returned home with the following currency! </h1>

<ul> 
    <li>Rubles</li>
    <li>Pound sterlig</li>
    <li> Candian Dollars</li>
    <li>Euros</li>
    <li>Yen</li>

</ul>

<h2>What ever shall to do?</h2>

<table> 
<tr>
<th colspan="2"> Currency</th>
<th>Dollars</th>
</tr>
<tr>
<th>Rubles</th>

<td>10007</td>

<td>117.11</td>
</tr>
<tr>
<th>Pound sterlig</th>

<td>500</td>

<td>575</td>
</tr>

<tr>
<th>Candian Dollars</th>

<td>5000</td>

<td>3800</td>
</tr>
<tr>
<th>Euros</th>

<td>1200</td>

<td>1200</td>
</tr>
<tr>
<th>Yen</th>

<td>2000</td>

<td>14.80</td>
</tr>
</table>
   </div> 
   <!-- End my wrapper -->
</body>
</html>