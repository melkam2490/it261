
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>

    <!-- External Stylesheets -->
    <link href="css/styles.css" type="text/css" rel="stylesheet">
   
</head>

<body class="<?php echo $body; ?>"> 
  <header>
    <div class="inner-header">
      <a href="index.php">
        <img id="logo" src="images/logo3.png" alt="Logo">
      </a>
      <nav>

      <ul>
     <li><a href="Home"></a><li>
     <li><a href="About"></a><li>
     <li><a href="Project"></a><li>
     <li><a href="Contact"></a><li>
     <li><a href="Gallery"></a><li>
  
      </ul>
</nav>


      <nav>
        <ul>
        <?php
         foreach($nav as $key => $value){
          if(THIS_PAGE == $key){
              echo '<li><a style="color:red" href=" '. $key .' "> '. $value .'</a> </li>';
          }
          else{
              echo '<li><a style="color:green" href=" '. $key .' "> '. $value .'</a> </li>';
          }
           } //end foreach
           



        ?>

        
        </ul>


      </nav>
   
    </div>
    <!-- end header -->
  </header> 