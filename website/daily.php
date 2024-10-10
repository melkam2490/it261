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
<ul style="list-style-type: none; padding-left: 0; margin-left: 0;">
    <li>
        <a style="color:<?php 
            if ($today == 'Sunday') {
                echo 'green';
            } else {
                echo 'violet';
            }
        ?>; text-decoration:none;" href="daily.php?today=Sunday">Sunday</a>
    </li>
    <li>
        <a style="color:<?php 
            if ($today == 'Monday') {
                echo 'red';
            } else {
                echo 'orange';
            }
        ?>; text-decoration:none;" href="daily.php?today=Monday">Monday</a>
    </li>
    <li>
        <a style="color:<?php 
            if ($today == 'Tuesday') {
                echo 'brown';
            } else {
                echo 'inherit';
            }
        ?>; text-decoration:none;" href="daily.php?today=Tuesday">Tuesday</a>
    </li>
    <li>
        <a style="color:<?php 
            if ($today == 'Wednesday') {
                echo 'green';
            } else {
                echo 'purple';
            }
        ?>; text-decoration:none;" href="daily.php?today=Wednesday">Wednesday</a>
    </li>
    <li>
        <a style="color:<?php 
            if ($today == 'Thursday') {
                echo 'green';
            } else {
                echo 'purple';
            }
        ?>; text-decoration:none;" href="daily.php?today=Thursday">Thursday</a>
    </li>
    <li>
        <a style="color:<?php 
            if ($today == 'Friday') {
                echo 'orange';
            } else {
                echo 'hotpink';
            }
        ?>; text-decoration:none;" href="daily.php?today=Friday">Friday</a>
    </li>
    <li>
        <a style="color:<?php 
            if ($today == 'Saturday') {
                echo '#722F37';
            } else {
                echo 'aqua';
            }
        ?>; text-decoration:none;" href="daily.php?today=Saturday">Saturday</a>
    </li>
</ul>


</aside>

<div>

</div>


<?php
include('./includes/footer.php');
?>
