<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
  case 'index.php':
    $title = 'Home page of my website project';
    $body = 'home';
    break;

    case 'about.php':
      $title = 'about page of my website project';
      $body = 'about inner';
      break;
 case 'dayily.php':
    $title = 'daiyl page of my website project';
    $body = 'daily inner';
    break;

    case 'project.php':
      $title = 'project page of my website project';
      $body = 'project inner';
      break;

      case 'contact.php':
        $title = 'contact page of my website project';
        $body = 'contact inner';
        break;

        case 'gallery.php':
          $title = 'gallery page of my website project';
          $body = 'gallery inner';

          break;}
      
          $nav = array(
            'index.php' => 'Home',
            'about.php' => 'About',
            'dayily.php' => 'Daily',
            'project.php' => 'Project',
            'contact.php' => 'Contact',
            'gallary.php' => 'Galary',
        );

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title> <!-- Corrected echo here -->
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>"> <!-- Corrected echo here -->
  <header>
    <div class="inner-header">
      <a href="index.php">
        <img id="logo" src="images/logo3.png" alt="Logo">
      </a>
      <!-- <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Daily</a></li>
            <li><a href="#">Project</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Gallery</a></li>
        </ul> 
      </nav> -->

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