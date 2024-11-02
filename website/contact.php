<?php
// Include configuration and header files
include('./config.php');
include('./includes/header.php'); // Ensure header.php exists in the specified path
?>
  
<div id="wrapper">
    <div id="hero">
        <img src="images/v.jpeg" alt="morning"> <!-- Ensure v.jpeg exists in the images folder -->
    </div>
    
    <main>
        <h1>Welcome to our Contact Page!</h1>
        <h2>We are going to learn PHP</h2>
        
        <h3>What is Lorem Ipsum?</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        
        <h2>Another Headline</h2>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

        <?php include('./includes/form.php'); ?> <!-- Ensure form.php exists in the specified path -->
    </main>
    
    <aside>
        <h3>This is our headline three in our beautiful aside</h3>
        
        <h3>Where does it come from?</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
    </aside>
</div> 
<!-- end wrapper -->

<?php
// Include the footer file
include('./includes/footer.php'); // Ensure footer.php exists in the specified path
?>