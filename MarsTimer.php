<!-- Juan Rodriguez, Ocotber 19th, 2025 -->
<?php

// Sets the Mars trip date/time
$nextTripDate = strtotime("2025-10-31 10:00:00"); 
$currentDate = time();

// This calculates time left
$timeLeft = $nextTripDate - $currentDate;
$daysLeft = floor($timeLeft / (60 * 60 * 24));

// Use control structures for messages
if ($daysLeft <= 0) {
    $message = " The Mars trip has taken off! See you on the red planet!";
} elseif ($daysLeft < 7) {
    $message = " Pack your bags! Less than a week to launch!";
} elseif ($daysLeft < 30) {
    $message = " The countdown is on — get ready for your adventure!";
} else {
    $message = " Keep dreaming of the stars — your Mars journey is coming!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mars Trip Countdown</title>
    <link rel="stylesheet" href="MarsCSS.css"> <!-- CSS File -->
</head>
<body>

        <!--Top Navigation of the page-->
    <nav>
        <ul>
            <li><a href="MarsHome.php">Home</a></li>
            <li><a href="MarsTimer.php">Mars Trip Clock</a></li>
            <li><a href="MarsContact.php">Contact</a></li>
        </ul>
    </nav>

    <!-- The Main Content  -->
    <main>
        <h1>Countdown to the Next Mars Trip</h1>
        <div id="countdown"></div>
        <div class="message"><?php echo $message; ?></div>
    </main>

    <!-- The Bottom of the page -->
    <footer>
        <p>&copy; 2025 Mars Tourism Exploration.CO</p>
    </footer>

    <!-- JavaScript Countdown -->
    <script>
        // Convert PHP timestamp to JavaScript time (milliseconds)
        const tripDate = new Date(<?php echo $nextTripDate * 1000; ?>);

        function updateCountdown() {
            const now = new Date();
            const diff = tripDate - now;

            // This is if the trip already departed
            if (diff <= 0) {
                document.getElementById("countdown").innerHTML = "🚀 The ship has departed!";
                return;
            }

            //  days, hours, and minutes
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((diff / (1000 * 60)) % 60);

            // Display countdown
            document.getElementById("countdown").innerHTML = 
                `${days} days, ${hours} hours, ${minutes} minutes remaining`;
        }

        // This immediately updates every minute
        updateCountdown();
        setInterval(updateCountdown, 60000);
    </script>

</body>
</html>
