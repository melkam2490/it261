<?php
// Start session to use session variables
session_start();
include('config.php');

// Redirect user to login page if session username is not set
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Handle logout by destroying session and redirecting to login page
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
    exit();
}

// Include header
include('./includes/header.php');
?>

<header>
<?php
// Display success message if available
if (isset($_SESSION['success'])): ?>
    <div class="success">
        <h3>
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']); // Clear success message after showing
            ?>
        </h3>
    </div>
<?php endif; ?>

<!-- If the user is logged in, display the welcome message -->
<?php if (isset($_SESSION['username'])): ?>
    <div class="welcome-logout">
        <h3>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?></h3> <!-- Sanitizing output for security -->
        <a href="index.php?logout=1">Log out</a>
    </div>
<?php endif; ?>
</header>

<div id="wrapper">
    <h1>Welcome to the Home Page of the Website</h1>
</div>

<!-- Include footer -->
<?php include('../includes/footer.php'); ?>
