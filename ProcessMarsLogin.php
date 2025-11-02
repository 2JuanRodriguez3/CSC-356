<!-- Juan Rodriguez, November 1st, 2025 -->
<?php

//  in the next assignment the login and password will be valid

// POST data 
$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';

// this will be the response for now
if (!empty($userid) && !empty($password)) {
    echo "<h2>Welcome, " . htmlspecialchars($userid) . "!</h2>";
    echo "<p>Your credentials will be validated with our Mars database soon!</p>";
    echo "<p><a href='MarsHome.php'>Return to Home</a></p>";
} else {
    echo "<h3>Error: Missing User ID or Password.</h3>";
    echo "<p><a href='MarsLogin.php'>Go Back to Login</a></p>";
}
?>