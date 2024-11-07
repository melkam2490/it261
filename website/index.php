<?php
include('./config.php');
include('./includes/header.php');
?>

<h1>Welcome to Our Web App Programming Class!</h1>

<main>
    <?php
    echo '<h2> We are going to display our image using a random selection!!!</h2>';

    // Array of photos (image names without extension)
    $photo1[0] = 'Photo1';
    $photo2[1] = 'Photo2';
    $photo3[2] = 'Photo3';
    $photo4[3] = 'Photo4';
    $photo5[4] = 'Photo5';
    $photo6[5] = 'Photo6';

    echo '<h2> Let\'s display a random picture</h2>';

    // Function to display a random image
    function random_images($photo) {
        $my_return = '';
        $i = rand(0, 5); // Randomly select an index between 0 and 5
        $selected_image = $photo[$i] . '.jpeg'; // Append ".jpeg" to the selected image name
        // Display the image with width and height without 'px'
        echo '<img src="image/' . $selected_image . '" alt="' . $photo[$i] . '" width="500" height="300">'; 
        return $my_return;
    }

    // Call the function to display the random image
    echo random_images($photo);
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
