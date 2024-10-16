<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adder</title>
  <link href="css/adder.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="" method="POST">
  <fieldset>
    <label>Enter the first number:</label><br>
    <input type="text" name="num1"><br><br>
    <label>Enter the second number:</label><br>
    <input type="text" name="num2"><br><br>
    <input type="submit" value="Add Numbers">
  </fieldset>
</form>

<p><a href="">Reset</a></p>
<p><a href="#">HTML validation</a><p>
<script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + encodeURIComponent(location.href));
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + encodeURIComponent(location.href));
    </script>


<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Check if any field is empty
    if (empty($num1) && empty($num2)) {
        echo '<p class="error">Please fill out all of the fields.</p>';
    } else {
        // Convert string inputs to numbers
       
        $total = $num1 + $num2;

        echo '
        <div class="box">
          <h2>You added ' . $num1 . ' and ' . $num2 . '.</h2>
          <p>and the answer is <br> <span style="color:red;">' . $total . '!</span></p>
        </div>';
    }
}
?>


</body>
</html>
