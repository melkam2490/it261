<?php
include('./includes/header.php');
?>
<main id="main" style="background-color:#d3d3d3; padding: 20px; margin-left: 20px;"> 
    <h1>Welcome To Our Special Song</h1>
    <?php echo $songTitle; ?> 
    <?php echo $content; ?>
    <?php echo $lyrics; ?>
    <?php echo $artist; ?>
    <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" style="float: right; margin-left: 15px; margin-bottom: 15px;">
</main>

<aside>
    <h2>Checkout Daily Specials</h2> 
    <ul style="list-style-type: none;">
        <li>
            <a style="color:<?php echo ($today == 'Sunday') ? 'Green' : 'violet'; ?>; text-decoration:none;" href="daily.php?today=Sunday">Sunday</a>
        </li>
        <li>
            <a style="color:<?php echo ($today == 'Monday') ? 'red' : 'orange'; ?>; text-decoration:none;" href="daily.php?today=Monday">Monday</a>
        </li>
        <li>
            <a style="color:<?php echo ($today == 'Tuesday') ? 'brown' : ''; ?>; text-decoration:none;" href="daily.php?today=Tuesday">Tuesday</a>
        </li>
        <li>
            <a style="color:<?php echo ($today == 'Wednesday') ? 'green' : 'purple'; ?>; text-decoration:none;" href="daily.php?today=Wednesday">Wednesday</a>
        </li>
        <li>
            <a style="color:<?php echo ($today == 'Thursday') ? 'green' : 'purple'; ?>; text-decoration:none;" href="daily.php?today=Thursday">Thursday</a>
        </li>
        <li>
            <a style="color:<?php echo ($today == 'Friday') ? 'orange' : 'hotpink'; ?>; text-decoration:none;" href="daily.php?today=Friday">Friday</a>
        </li>
        <li>
            <a style="color:<?php echo ($today == 'Saturday') ? '#722F37' : 'aqua'; ?>; text-decoration:none;" href="daily.php?today=Saturday">Saturday</a>
        </li>
    </ul>
</aside>

<!-- Make sure to properly close the wrapper div if it was opened previously -->
<div>
    <!-- Your content here -->
</div>


<?php
include('./includes/footer.php');
?>
