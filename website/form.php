<?php
include('./config.php');
include('./includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <fieldset>
        <legend>Contact Melkam</legend>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php echo isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : ''; ?>">
        <span> <?php echo $first_name_err; ?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php echo isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : ''; ?>">
        <span> <?php echo $last_name_err; ?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        <span> <?php echo $email_err; ?></span>

        <label>Gender</label>
        <ul>
            <li><input type="radio" name="gender" value="female" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'female' ? 'checked="checked"' : ''; ?>> Female</li>
            <li><input type="radio" name="gender" value="male" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'male' ? 'checked="checked"' : ''; ?>> Male</li>
            <li><input type="radio" name="gender" value="neither" <?php echo isset($_POST['gender']) && $_POST['gender'] == 'neither' ? 'checked="checked"' : ''; ?>> Neither</li>
        </ul>
        <span> <?php echo $gender_err; ?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placeholder="XXX-XXX-XXXX" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
        <span> <?php echo $phone_err; ?></span>

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


        <label>Favorite Movies</label>
        <ul>
            <li><input type="checkbox" name="movies[]" value="The Shawshank Redemption" <?php echo isset($_POST['movies']) && in_array('The Shawshank Redemption', $_POST['movies']) ? 'checked="checked"' : ''; ?>> The Shawshank Redemption</li>
            <li><input type="checkbox" name="movies[]" value="The Dark Knight" <?php echo isset($_POST['movies']) && in_array('The Dark Knight', $_POST['movies']) ? 'checked="checked"' : ''; ?>> The Dark Knight</li>
            <li><input type="checkbox" name="movies[]" value="The Night Agent" <?php echo isset($_POST['movies']) && in_array('The Night Agent', $_POST['movies']) ? 'checked="checked"' : ''; ?>> The Night Agent</li>
            <li><input type="checkbox" name="movies[]" value="Barbie" <?php echo isset($_POST['movies']) && in_array('Barbie', $_POST['movies']) ? 'checked="checked"' : ''; ?>> Barbie</li>
            <li><input type="checkbox" name="movies[]" value="Killers of the Flower Moon" <?php echo isset($_POST['movies']) && in_array('Killers of the Flower Moon', $_POST['movies']) ? 'checked="checked"' : ''; ?>> Killers of the Flower Moon</li>
        </ul>
        <span> <?php echo $movies_err; ?></span>

        <label>Leave Comments about movie experience</label>
        <textarea name="comments"><?php echo isset($_POST['comments']) ? htmlspecialchars($_POST['comments']) : ''; ?></textarea>
        <span> <?php echo $comments_err; ?></span>

        <label>Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="yes" <?php echo isset($_POST['privacy']) && $_POST['privacy'] == 'yes' ? 'checked="checked"' : ''; ?>> Yes</li>
            <li><input type="radio" name="privacy" value="no" <?php echo isset($_POST['privacy']) && $_POST['privacy'] == 'no' ? 'checked="checked"' : ''; ?>> No</li>
        </ul>
        <span> <?php echo $privacy_err; ?></span>

        <input type="submit" value="Send It">
        <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Reset</a></p>
    </fieldset>
</form>
</body>
</html>

<?php
include('./includes/footer.php');
?>
