<!-- Juan Rodriguez, Ocotber 18th, 2025 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Mars Tourism</title>
    <link rel="stylesheet" href="MarsCSS.css">
</head>
<body>

    <!-- Navigating menu -->
    <nav>
        <ul>
            <li><a href="MarsHome.php">Home</a></li>
            <li><a href="MarsTimer.php">Mars Trip Clock</a></li>
            <li><a href="MarsContact.php">Contact</a></li>
        </ul>
    </nav>

    <!--Main Page-->
    <main>
        <h1>Contact Mars Tourism</h1>
        <p>Have questions about your trip? We’d love to hear from you!</p>

        <form action="#" method="post" class="contact-form">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Your name" required><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" placeholder="you@example.com" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="5" placeholder="Type your message..." required></textarea><br>

            <button type="submit">Send Message</button>
        </form>
    </main>

    <!-- Bottom of the page -->
    <footer>
        <p>&copy; 2025 Mars Tourism Exploration.CO</p>
    </footer>

</body>
</html>
