<?php
// This is our server script for database interaction
// We start the session to store information
session_start();
include('config.php');

// Connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));


// we will be asking user registration
// we will also be using a new function mysqli_real_escape_string
if (isset($_POST['reg_user'])) {
    // Sanitize input fields
    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

    // Validation checks for empty fields
    if (empty($first_name)) {
        array_push($errors, 'First name is required');
    }
    if (empty($last_name)) {
        array_push($errors, 'Last name is required');
    }
    if (empty($email)) {
        array_push($errors, 'Email is required');
    }
    if (empty($username)) {
        array_push($errors, 'Username is required');
    }
    if (empty($password1)) {
        array_push($errors, 'Password is required');
    }

    // Check if passwords match
    if ($password1 != $password2) {
        array_push($errors, 'Passwords do not match!');
    }

    // Check if username or email already exists
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($iConn, $user_check_query) or die("Error: " . mysqli_error($iConn));

    $rows = mysqli_fetch_assoc($result);

    if ($rows) {
        if ($rows['username'] == $username) {
            array_push($errors, 'Username already exists!');
        }
        if ($rows['email'] == $email) {
            array_push($errors, 'This email already exists!');
        }
    }

    // If no errors, proceed with registration
    if (count($errors) == 0) {
        // Encrypt the password using md5 (consider replacing with password_hash())
        $password = md5($password1);

        // Insert data into the database
        $query = "INSERT INTO users (first_name, last_name, email, username, password) 
                  VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
        mysqli_query($iConn, $query) or die("Error: " . mysqli_error($iConn));

        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['success'] = 'Registration successful';

        // Redirect to login page
        header('Location: login.php');
        exit(); // Always call exit() after a header redirect
    }
} // End of registration logic

// Handle user login
if (isset($_POST['login_user'])) {
    // Sanitize the login fields
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    // Validation checks for empty fields
    if (empty($username)) {
        array_push($errors, 'Username is required');
    }
    if (empty($password)) {
        array_push($errors, 'Password is required');
    }

    // If no errors, proceed with login
    if (count($errors) == 0) {
        // Encrypt the password
        $password = md5($password);

        // Query to check user credentials
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
        $result = mysqli_query($iConn, $query);

        // If a matching user is found
        if (mysqli_num_rows($result) == 1) {
            // Set session variables
            $_SESSION['username'] = $username;
            $_SESSION['success'] = 'Login successful';

            // Redirect to index page
            header('Location: index.php');
            exit(); 
        } else {
            array_push($errors, 'Wrong username/password combination!');
        }
    }
}
?>
