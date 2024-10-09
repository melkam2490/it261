<?php
// Class Coffee Exercise 
// If the day is Thursday, it will be Pumpkin Latte Day
// Introducing the isset() function
// Then we will introduce our global variable

// Starting the switch
// If $_GET['today'] is set, $today will be that value. If it's not set, $today will be the current day.

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

// Switch statement based on the day of the week
switch ($today) {
    case 'Wednesday':
        $coffee = '<h2>Wednesday: Pumpkin Latte Day</h2>';
        $pic = 'pumpkin-spice.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p><b>The Pumpkin Spice Latte (PSL)</b> is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice.</p>';
        break;

    case 'Thursday':
        $coffee = '<h2>Thursday: Green Tea Latte Day</h2>';
        $pic = 'green.jpg';
        $alt = 'Green Tea Latte';
        $content = '<p><b>Green tea lattes</b> are rich in antioxidants and other health benefits, making them a great way to energize your mind and boost your immune system. The drink requires a powdered form of green tea known as matcha, and you can prepare it in both hot and iced forms.</p>';
        break;

    case 'Friday':
        $coffee = '<h2>Friday: Iced Coffee Day</h2>';
        $pic = 'iced-coffee.jpg';
        $alt = 'Iced Coffee';
        $content = '<p>Kick off your weekend with a refreshing iced coffee, brewed to perfection and served over ice!</p>';
        break;

    case 'Saturday':
        $coffee = '<h2>Saturday: Cappuccino Day</h2>';
        $pic = 'cappuccino.jpeg';
        $alt = 'Cappuccino';
        $content = '<p>Enjoy the perfect balance of steamed milk and espresso with a thick layer of foam on top on Cappuccino Day!</p>';
        break;

    case 'Sunday':
        $coffee = '<h2>Sunday: Caramel Macchiato Day</h2>';
        $pic = 'caramel-macchiato.jpeg';
        $alt = 'Caramel Macchiato';
        $content = '<p>Enjoy our rich and creamy Caramel Macchiato, layered with smooth espresso, steamed milk, and caramel drizzle!</p>';
        break;

    case 'Monday':
        $coffee = '<h2>Monday: Espresso Day</h2>';
        $pic = 'espresso.jpeg';
        $alt = 'Espresso';
        $content = '<p>Start your week with a bold shot of our finest espresso, the perfect kick to energize your Monday!</p>';
        break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday: Mocha Day</h2>';
        $pic = 'mocha.webp';
        $alt = 'Mocha';
        $content = '<p>Indulge in a blend of rich chocolate and espresso, topped with whipped cream, on our special Mocha Day!</p>';
        break;

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Class Work Exercise</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #wrapper { /* Corrected ID here */
            width: 940px;
            margin: 20px auto;
            text-align: center;
        }
        img {
            width: 100%; /* Ensures the image fits the width of the container */
            max-width: 300px; /* Set a max width for the image */
            height: auto;
            margin: 20px 0;
        }
        ul {
 
    padding: 0; 
    margin: 0; /* Remove margin */
    text-align: left; /* Align text to the left */
}

ul li {
    margin: 5px 0; /* Add some space between list items */


        a:hover {
            background-color: red;
            color: blue;
        }
        h1, h2 ,img{
            margin: botton 10px;
        }
        p{
            margin: botton 20px;
        }
    </style>
</head>
<body>
    <div id="wrapper"> <!-- Corrected ID here -->
        <h1>My Wonderful Switch Class Work Exercise</h1>
        <?php
        echo $coffee;
        ?>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <?php echo $content; ?>

        <h2>Check out Daily Specials</h2>
        
        <ul>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
    <!-- end wrapper -->
</body>
</html>
