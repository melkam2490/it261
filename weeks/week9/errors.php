

<?php

// our error file that we will be using a foreach loop
//we will use array_push - diffrent errors
// if we have errors we need to display  them
if(count($errors) > 0): ?>
<div class="errors">
    <?php foreach($errors as $error): ?>
    <p><?php echo $error; ?></p>
    <?php endforeach; ?>
</div>
<?php endif; ?>
