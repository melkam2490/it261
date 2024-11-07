<?php
include('./config.php');
include('./includes/header.php');
?>

<h1>Welcome to Our Web App Programming Class!</h1>

<main>
    <?php
    echo '<h2>We are going to display our image using a random function!!!</h2>';

    // Array of photos (image names without extension)
    $photos = ['Photo1', 'Photo2', 'Photo3', 'Photo4', 'Photo5', 'Photo6'];

    echo '<h2>Let\'s display a random picture</h2>';

    // Function to display a random image
    function random_images($photos) {
        $my_return ='';

        $i = rand(0, 5); 

        // Select the random image and append the .jpeg extension
        $selected_image = $photos[$i] . '.jpeg'; 


        $my_return='<img src="image/' . $selected_image . '" alt="' . $photos[$i] . '" width="500" height="300">';
        return $my_return;

    }
     echo random_images($photos);
    ?>
</main>

<aside>
    <h3>This is our headline three in our beautiful aside</h3>
    <h3>Where does it come from?</h3>
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
</aside>

<?php
include('./includes/footer.php');
?>
