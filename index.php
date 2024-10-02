<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melkam's Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>
            <a href="index.php">Melkam's Portal Page</a>
        </h1>
    
    </header>

    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="website/daily.php">Switch</a></li>
                <li><a href="#">Troubleshoot</a></li>
                <li><a href="#">Calculator</a></li>
                <li><a href="#">Email</a></li>
                <li><a href="#">Database</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
        </nav>

        <main>
            <h2>About Melkam</h2>
            <img class="right" src="images/melka.jpg" alt="Photo of Melkam">
            <p>My goal is to become a skilled full-stack developer, mastering both front-end and back-end technologies to build meaningful, user-friendly applications. I’m passionate about solving problems through code and continuously expanding my knowledge in web development. Outside of technology, I love nature and enjoy spending time outdoors, whether it's hiking or simply relaxing by the water. Nature brings me a sense of peace and balance, fueling my creativity and motivation to achieve my goals..</p>
 
        </main>

        <aside>
            <h2>Weekly Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/var2.php">var2.php</a></li>
                <li><a href="weeks/week2/currency.php">currency</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic</a></li>
                
            
            </ol>
            <br>
            <h3>Week3</h3>
            <ol>
                <li><a href="weeks/week2/var.php">if.php</a></li>
                <li><a href="weeks/week2/var2.php">foreach.php</a></li>
                <li><a href="weeks/week2/currency.php">forloop.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">date.php</a></li>
                <li><a href="something.php">Swich.php</a></li> <!-- Corrected link text -->
                
            </ol>
            <br>

            <h3>Week4</h3>
            <ol>
                <li><a href="weeks/week2/var.php">form1.php</a></li>
                <li><a href="weeks/week2/var2.php">form2.php</a></li>
                <li><a href="weeks/week2/currency.php">form3.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">form-artimatic.php</a></li>
  
                
            </ol>
            <br>
            <h3>Week5</h3>
            <ol>
                <li><a href="weeks/week2/var.php">currency1.php</a></li>
                <li><a href="weeks/week2/var2.php">currency2.php</a></li>
                <li><a href="weeks/week2/currency.php">currency3.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency4.php</a></li>
                <li><a href="something.php">Swich.php</a></li> <!-- Corrected link text -->
                
            </ol>
            <br>
            <h3>Week6</h3>
            <ol>
                <li><a href="weeks/week2/var.php">form1.php</a></li>
                <li><a href="weeks/week2/var2.php">function.php</a></li>
                <li><a href="weeks/week2/currency.php">impold.php</a></li>
                
            </ol>
            <h3>Week7</h3>
            <ol>
                <li><a href="weeks/week2/var.php">picture.php</a></li>
                <li><a href="weeks/week2/var2.php">random.php.php</a></li>
                <li><a href="weeks/week2/currency.php">impold.php</a></li>
                
            </ol>
            <h3>Week8</h3>
            <ol>
                <li><a href="weeks/week2/var.php">people.php</a></li>
                
                <li><a href="weeks/week2/var.php">people.php</a></li>
            </ol>
        </aside>
        <img class="me" src="images/22.jpg" alt=" Melkam">
    </div>
    <!-- end wrapper -->
   

    <footer>
        <ul>
            <li>Copyright &copy; 2024</li>
            <li>All Rights Reserved</li>
            <li><a href="http://localhost/it261/index.php">Web Design by YOUR NAME</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
    </footer>

    <script>
        document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + encodeURIComponent(location.href));
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + encodeURIComponent(location.href));
    </script>
</body>
</html>
