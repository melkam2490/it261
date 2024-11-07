  <?php
  ob_start();

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
        function make_links($nav) {
          $myreturn = '';
          foreach($nav as $key => $value) {
            if (THIS_PAGE == $key) {
              $myreturn .= '<li><a style="color:red" href="'.$key.'"> '.$value.'</a></li>';
            } else {
              $myreturn .= '<li><a style="color:green" href="'.$key.'"> '.$value.'</a></li>';
            }
          }
          return $myreturn;
        }
    

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

$movies = '';
$first_name = '';
$last_name = '';
$email = '';
$regions = '';
$gender = '';
$phone = '';
$comments = '';
$privacy = '';

$movies_err = '';
$first_name_err = '';
$last_name_err = '';
$email_err = '';
$regions_err = '';
$gender_err = '';
$phone_err = '';
$comments_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate movies
    if (empty($_POST['movies'])) {
        $movies_err = 'What...no movies?';
    } else {
        $movies = $_POST['movies'];
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
    if (empty($_POST['regions'])) {
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

    // Validate phone number
    if (empty($_POST['phone'])) {
        $phone_err = 'Your phone number please!';
    } elseif (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        $phone_err = 'Invalid format! Use XXX-XXX-XXXX';
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

    // If no errors, proceed to send the email
    if (!empty($movies) && !empty($first_name) && !empty($last_name) && !empty($email) &&
        !empty($regions) && !empty($gender) && !empty($phone) && !empty($comments) && !empty($privacy)) {

        $to = 'melkam2490@gmail.com';
        $subject = 'Test email on ' . date('m/d/y, h:i A');
        $body = '
        First Name: ' . $first_name . PHP_EOL . '
        Last Name: ' . $last_name . PHP_EOL . '
        Email: ' . $email . PHP_EOL . '
        Gender: ' . $gender . PHP_EOL . '
        Movies: ' . implode(', ', $movies) . PHP_EOL . '
        Region: ' . $regions . PHP_EOL . '
        Comments: ' . $comments . PHP_EOL . '
        Phone: ' . $phone . PHP_EOL;

        $headers = "From: noreply@melkam2490.com\r\n";

        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
      
    }
}
?>
