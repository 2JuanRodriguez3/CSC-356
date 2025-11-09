<?php
// Show all errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Include database connection
require_once("db_connection.php");

// Default error message
$errorMessage = "";

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get user input
    $username = trim($_POST['userid']);
    $password = trim($_POST['password']);

    // Simple check to ensure fields are not empty
    if ($username == "" || $password == "") {
        $errorMessage = "Please enter both UserID and Password.";
    } else {
        // Query the database for this user
        $sql = "SELECT * FROM mslogin WHERE username = ? AND password = ?";
        $stmt = $db_conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            // Credentials correct, start session
            $_SESSION['id'] = session_id();
            $_SESSION['isLoggedIn'] = 'true';
            $_SESSION['UserName'] = $user['UserName'];

            // Redirect to intranet
            header('Location: admin.php');
            exit();
        } else {
            $errorMessage = "Invalid UserID or Password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mars Tourism Login</title>
<link rel="stylesheet" href="MarsCSS.css"> <!-- Link shared CSS -->
</head>
<body>
        <!--Top Navigation of the page-->
    <nav>
        <ul>
            <li><a href="MarsHome.php">Home</a></li>
            <li><a href="MarsTimer.php">Mars Trip Clock</a></li>
            <li><a href="MarsContact.php">Contact</a></li>
            <li><a href="MarsLogin.php">Login</a></li> 
        </ul>
    </nav>

<div class="login-container">
    <h2>Login to Mars Tourism Agency</h2>
    <?php if($errorMessage != "") echo "<p class='error'>$errorMessage</p>"; ?>
    <form method="POST">
        <input type="text" name="userid" placeholder="User ID" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
