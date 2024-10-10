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
            'daily.php' => 'Daily',
            'project.php' => 'Project',
            'contact.php' => 'Contact',
            'gallary.php' => 'Galary',
        );

  if(isset($_GET['today'])){
    $today=$_GET['today'] ;
  }
  else{
    $today = date('l');

  }
  switch($today){

    case 'Sunday':
      $songTitle = "Easy Like Sunday";
      $artist = "Ella Rivers"; 
      $pic = "elaa.jpeg";
      $alt = "Relaxed Sunday Vibes";
      $lyrics = "<p>Kick back, unwind, let the day drift by, it's easy like Sunday, just you and the sky.</p>";
      $content = "<p>Let Ella Rivers' soothing voice set the perfect tone for a calm, peaceful Sunday.</p>";
      $body= "Sunday";
      $background="background";
      
     
      break;
  

      case 'Monday':
      $songTitle = "Happy";
      $artist = "Pharrell Williams";
      $pic = "22.jpeg";
      $alt = "Happy Monday";
      $lyrics = "<p>Because I'm happy, clap along if you feel like a room without a roof.</p>";
      $content = "<p>Start your week on a positive note with Pharrell's infectious energy!</p>";
      $body= "monday";
      $footer="footer";
      break;
      


      case 'Tuesday':
        $songTitle = "Shake It Off";
        $artist = "Taylor Swift";
        $pic = "t.jpeg";
        $alt = "Shake It Off";
        $lyrics = "<p>'Cause the players gonna play, play, play, play, play,<br> 
                   And the haters gonna hate, hate, hate, hate, hate.</p>";
        $content = "<p>Shake off those Tuesday blues and dance your way through the day!</p>";
        $body= "monday";
        break;
        case 'Wednesday':
          $songTitle = "Hump Day";
          $artist = "Kool & The Gang";
          $pic = "33.jpeg"; 
          $alt = "Hump Day";
          $lyrics = "<p> It's Wednesday, let's get together,<br> 
                     Celebrate the week, no matter the weather!</p>";
          $content = "<p>Get over the hump with this classic tune from Kool & The Gang!</p>";
          $body= "monday";
          break;

      case 'Thursday':
        $songTitle = "Thursday";
        $artist = "Jessie J";
        $pic = "j.jpeg"; 
        $alt = "Thursday";
        $lyrics = "<p> It's Thursday, feelin' good, ready to rise,<br> 
                   Let the music take you high!</p>";
        $content = "<p>Celebrate the day with Jessie J's infectious energy!</p>";
        $body= "monday";
        break;
        case 'Friday':
          $songTitle = "Friday";
          $artist = "Rebecca Black";
          $pic = "f.jpeg"; 
          $alt = "Friday";
          $lyrics = "<p> It's Friday, Friday, gotta get down on Friday,<br>
                     Everybody's looking forward to the weekend, weekend!</p>";
          $content = "<p>Join in the fun with Rebecca Black's viral anthem!</p>";
          $body= "monday";
          break;
          case 'Saturday':
            $songTitle = "Saturday Sun";
            $artist = "Vance Joy";
            $pic = "joy.jpeg"; // Image file name for Saturday
            $alt = "Saturday";
            $lyrics = "<p>Saturday sun, won't you come and play,<br>
                       Bring the joy and light of the day!</p>";
            $content = "<p>Embrace the weekend vibes with Vance Joy!</p>";
            $body= "monday";
            break;
      
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
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