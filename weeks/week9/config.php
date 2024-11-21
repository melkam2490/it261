<?php
ob_start();  // Prevents header errors before reading the whole page!
define('DEBUG', TRUE);  // We want to see our errors during development

include('credentials.php'); // Make sure the 'credentials.php' file exists and contains the necessary credentials

$errors = array();
$success = "You have successfully logged on!";  // Fixed the typo in "sucessfully"

// Error handling function
function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        // Output detailed error messages during development
        echo 'Error in file: <b>' . $myFile . '</b> on line: <b>' . $myLine . '</b>';
        echo ' Error message: <b>' . $errorMsg . '</b>';
        die();  // Stop execution after an error in development
    } else {
        // For production, log the error and show a generic message
        error_log("Error in file $myFile on line $myLine: $errorMsg", 0);  // Log the error in the server's error log
        echo 'Houston, we have a problem!';  // Generic error message for users
        die();  // Optionally terminate execution here
    }
}

// Example usage of the custom error handler
// myError(__FILE__, __LINE__, 'This is a test error!');

?>
