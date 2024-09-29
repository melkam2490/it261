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
        <h2>The navigation below represents our Big Assignment</h2>
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
            <p>A paragraph about myself, i.e., goals, background, hobbies, etc. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
        </main>

        <aside>
            <h2>Weekly Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="var.php">var.php</a></li>
                <li><a href="var2.php">var2.php</a></li>
                <li><a href="var3.php">var3.php</a></li>
                <li><a href="something.php">Something</a></li> <!-- Corrected link text -->
                <li><a href="something-else.php">Something Else</a></li> <!-- Suggested a more descriptive link -->
            </ol>
        </aside>
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
