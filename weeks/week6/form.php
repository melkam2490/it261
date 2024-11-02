<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First Form in Week6</title>
  <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
  <h1> My First Form In Week6</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <fieldset>
    <legend>Contact Melkam</legend>
    
    <label>First Name </label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">

    <label>Last Name </label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
    <label>Email </label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">

    <label>Gender</label>

    <ul>
      <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked= "checked"';?>>Female</li>

      <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked= "checked"';?>>Male</li>

      <li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked= "checked"';?>>Neither</li>
    </ul>
    <label>Phone</label>
    <input type="tel" name="phone" id="phone" placeholder="xxx-xxx-xxxx" 
       value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">

    <label>Your favorit Wine</label>
    <ul>
   <li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab',$_wines)) echo 'checked="checked"'  ;?>> Cabernet</li>

   <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot',$_wines)) echo 'checked="checked"'  ;?>>Merlot</li>

   <li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah',$_wines)) echo 'checked="checked"'  ;?>>Syrah</li>

   <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec',$_wines)) echo 'checked="checked"'  ;?>>Malbec</li>

   <li><input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines']) && in_array('red',$_wines)) echo 'checked="checked"'  ;?>>Red Blend</li>
    </ul>
    <label>Regions</label>

   <select name="regions">
  <option value="" <?php if(!isset($_POST['regions']) || $_POST['regions'] == "") echo 'selected="selected"'; ?>>Select One !</option>

  <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected="selected"'; ?>>North West</option>
  
  <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected="selected"'; ?>>South West</option>
  
  <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected="selected"'; ?>>Mid West</option>
  
  <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected="selected"'; ?>>North East</option>
  
  <option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected="selected"'; ?>>South East</option>
</select>

<label> Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy']== "yes" )echo 'checked ="checked"';?>></li>
</ul>
<input type="submit"  value=" send it">
<p><a href=""> Reset</a></p>

  
  </fieldset>
</form>

</body>
</html>