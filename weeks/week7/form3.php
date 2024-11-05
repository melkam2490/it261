
<?php
ob_start();

$wines = '';
$first_name = '';
$last_name = '';
$email = '';
$regions = '';
$gender = '';
$phone = '';
$comments = '';
$privacy = '';

$wines_err = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$regions_err = '';
$gender_err = '';
$phone_err = '';
$comments_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate wines
    if (empty($_POST['wines'])) {
        $wines_err = 'What...no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    // Validate first name
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    // Validate last name
    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please fill in your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    // Validate email
    if (empty($_POST['email'])) {
        $email_err = 'Please fill in your email';
    } else {
        $email = $_POST['email'];
    }

    // Validate regions
    if (empty($_POST['regions'] == NULL)) {
        $regions_err = 'Please select your region';
    } else {
        $regions = $_POST['regions'];
    }

    // Validate gender
    if (empty($_POST['gender'])) {
        $gender_err = 'Please select your gender';
    } else {
        $gender = $_POST['gender'];
    }

    // Validate phone
    if (empty($_POST['phone'])) {
        $phone_err = 'Please fill in your phone';
    } elseif (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $_POST['phone'])) {
        $phone_err = 'Invalid format. Use xxx-xxx-xxxx.';
    } else {
        $phone = $_POST['phone'];
    }

    // Validate comments
    if (empty($_POST['comments'])) {
        $comments_err = 'Please leave your comments';
    } else {
        $comments = $_POST['comments'];
    }

    // Validate privacy
    if (empty($_POST['privacy'])) {
        $privacy_err = 'You must agree to our privacy policy';
    } else {
        $privacy = $_POST['privacy'];
    }

    // Function to handle wines
    function my_wines($wines) {
        return implode(', ', $wines);
    }

    // If all fields are filled, send email
    if (!empty($first_name) && !empty($last_name) && !empty($comments) && !empty($email) && !empty($phone) && !empty($wines) && !empty($regions) && !empty($privacy) && !empty($gender)) {
        $to = 'melkam2490@gmail.com';
        $subject = 'Test email on ' . date('m/d/y, h:i A');
        $body = '
        First Name: ' . $first_name . PHP_EOL . '
        Last Name: ' . $last_name . PHP_EOL . '
        Email: ' . $email . PHP_EOL . '
        Gender: ' . $gender . PHP_EOL . '
        Wines: ' . my_wines($wines) . PHP_EOL . '
        Region: ' . $regions . PHP_EOL . '
        Comments: ' . $comments . PHP_EOL . '
        Phone: ' . $phone . PHP_EOL;

        $headers = "From: noreply@melkam2490.com\r\n";

        if(mail($to, $subject, $body, $headers)) {
            echo '<p>Thank you for your submission, ' . htmlspecialchars($first_name) . '!</p>';
        } else {
            echo '<p>Sorry, there was an issue sending your email. Please try again later.</p>';
        }
    }
}

ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is my second Form in Week6</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>My First Form In Week6</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Contact Melkam</legend>

            <label>First Name </label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
            <span> <?php echo $first_name_err;?></span>

            <label>Last Name </label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
            <span> <?php echo $last_name_err;?></span>

            <label>Email </label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span> <?php echo $email_err;?></span>

            <label>Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>> Female</li>
                <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>> Male</li>
                <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked"'; ?>> Neither</li>
            </ul>
            <span> <?php echo $gender_err;?></span>

            <label>Phone</label>
            <input type="tel" name="phone" id="phone" placeholder="xxx-xxx-xxxx" 
                   value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
                   <span> <?php echo $phone_err;?></span>

            <label>Your Favorite Wine</label>
            <?php if (!empty($wines_err)) echo "<p style='color:red;'>$wines_err</p>"; ?>
            <ul>
                <li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $_POST['wines'])) echo 'checked="checked"'; ?>> Cabernet</li>
                <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $_POST['wines'])) echo 'checked="checked"'; ?>> Merlot</li>
                <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $_POST['wines'])) echo 'checked="checked"'; ?>> Syrah</li>
                <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $_POST['wines'])) echo 'checked="checked"'; ?>> Malbec</li>
                <li><input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines']) && in_array('red', $_POST['wines'])) echo 'checked="checked"'; ?>> Red Blend</li>
            </ul>
            <span> <?php echo $wines_err;?></span>

            <label>Regions</label>
            <select name="regions">
                <option value="" <?php if(!isset($_POST['regions']) || $_POST['regions'] == "") echo 'selected="selected"'; ?>>Select One !</option>
                <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected="selected"'; ?>>North West</option>
                <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected="selected"'; ?>>South West</option>
                <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected="selected"'; ?>>Mid West</option>
                <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected="selected"'; ?>>North East</option>
                <option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected="selected"'; ?>>South East</option>
            </select>
            <span> <?php echo $regions_err;?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
            <span> <?php echo $comments_err;?></span>

            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"'; ?>> Yes</li>
            </ul>
            <span> <?php echo $privacy_err;?></span>


            <input type="submit" value="Send It">
            <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Reset</a></p>
        </fieldset>
    </form>
</body>
</html>