<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
  <header>
    <div class="inner-header">
      <a href="index.html">
        <img id="logo" src="images/logo3.png" alt="Logo">
      </a>
      <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Daily</a></li>
            <li><a href="#">Project</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Gallery</a></li>
        </ul> 
    </nav>
    </div>
  </header> 
  <div id="wrapper">
    <div id="hero">
      <img src="images/twelve.jpg" alt="twelve is greater than three">
    </div>
    <main>
      <h1>Welcome to Our Web App Programming Class!</h1>
      <h2>We are going to learn PHP</h2>
      <h3>What is Lorem Ipsum?</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      <h2>Another Headline</h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    </main>
    <aside>
      <h3>This is our headline three in our beautiful aside</h3>
      <h3>Where does it come from?</h3>
      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
    </aside>
  </div> 
  <footer>
    <ul>
      <li>Copyright &copy;
          2024</li>
      <li>All Rights Reserved</li>
      <li><a href="../index.php">Web Design by Melkam Worku</a></li>
      <li><a id="html-checker" href="#">HTML Validation</a></li>
      <li><a id="css-checker" href="#">CSS Validation</a></li>
      </ul>
      
      <script>
              document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
              document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
      </script>
  </footer>
</body>
</html>