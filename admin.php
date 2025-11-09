<?php
session_start();

// Only allow logged-in users
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != 'true') {
    header('Location: MarsLogin.php');
    exit();
}

$welcome_message = "Welcome, " . $_SESSION['UserName'] . "!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mars Employee Intranet</title>
<style>
body { background-color:#101728; color:white; font-family:Poppins, sans-serif; text-align:center; padding:20px; }
h1 { color:#ffcc33; }
.dashboard {
    background-color:#1e2950; padding:20px; border-radius:10px; margin-top:20px;
}
a { color:#ffcc33; text-decoration:none; }
button { padding:10px 20px; border-radius:8px; background:#ff4500; color:white; border:none; cursor:pointer; margin-top:10px;}
</style>
</head>
<body>

<h1><?php echo $welcome_message; ?></h1>
<div class="dashboard">
    <h2>Employee Dashboard</h2>
    <p> Next Mars flight booked passengers: <strong>128</strong></p>
    <p><a href="#">Download HR Liability Form</a></p>
    <p><a href="#">View Space Safety Guidelines</a></p>
    <form method="post" action="MarsHome.php">
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html>