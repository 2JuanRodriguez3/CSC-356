<!-- Juan Rodriguez November 29th, 2025 -->
 <!-- This below is the new XML code that has been added -->
<?php
// this is new xml data for the stars below
$xmlData = <<<XML
<!-- these are the elements that contain new stars and their information -->
<stars>
    <star>
        <name>Betelgeuse</name>
        <distance>642.5</distance>
        <type>Red Supergiant</type>
    </star>
    <star>
        <name>Rigel</name>
        <distance>860</distance>
        <type>Blue Supergiant</type>
    </star>
    <star>
        <name>Procyon</name>
        <distance>11.46</distance>
        <type>Main Sequence</type>
    </star>
    <star>
        <name>Altair</name>
        <distance>16.7</distance>
        <type>Main Sequence</type>
    </star>
</stars>
XML;

// this helps load xml data
$stars = simplexml_load_string($xmlData);
?>


<?php
// this attatches to the database connection file
include 'db_connection.php';

// this checks if the connection was successful
if (!$db_conn) {
    die("Connection failed: " . mysqli_connect_error());
    // die() stops the script and outputs the error
}

// Define the SQL query to select all data from the "stellarstars" table
$select_query = "SELECT * FROM stellarstars";

// Execute the query
$result = mysqli_query($db_conn, $select_query);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // if any rows are there this will start creating an HTML table to display the data
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Star Name</th><th>Magnitude</th><th>Distance</th></tr>";
    
    // Loop through each row in the result set
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['type']."</td>";
        echo "<td>".$row['distant']."</td>";
    }
    echo "</table>";
} else {
    // this message would show if no rows were found
    echo "No data found in the stellarstars table.";
}

// this closes the database automatically at the end of the execution
mysqli_close($db_conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar Stars</title>

    <!-- Link to external CSS -->
    <link rel="stylesheet" href="FinalePage1.css">

    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

<div class="container">
    <div class="logo-tab">Stellar Stars</div>

    <!-- these are the navagation tabs at the top of the page -->
    <nav class="nav-tabs">
        <ul>
            <li class="tab-item active" data-target="#home">Home</li>
            <li class="tab-item" data-target="#constellations">Constellations</li>
            <li class="tab-item" data-target="#stars">Stars</li>
            <li class="tab-item" data-target="#about">About</li>
            <li class="tab-item" data-target="#contact">Contact</li>
    <!-- New login/create account tabs -->
        <li class="tab-item open-popup" data-target="#create-account-popup">Create Account</li>
        <li class="tab-item open-popup" data-target="#login-popup">Login</li>
    </nav>

    <!-- This here is the main home page and the content on this tab -->
    <section id="home" class="tab-content active">
        <h2>Welcome to Stellar Stars</h2>
        <p>Explore the wonders of the night sky through our interactive portal.</p>
        <div class="image-gallery">
            <div class="image-card" data-title="Night Sky Overview">
                <img src="NightSKY.jpg" alt="Night Sky" style="border-radius: 15px; width: 200%; max-width: 300px; height: auto;">
                <p>Beautiful Blue Starry Sky</p>
            </div>
            <div class="image-card" data-title="Planets in Our Solar System">
                <img src="Planets.jpg" alt="Planets" style="border-radius: 15px; width: 100%; max-width: 300px; height: auto;">
                 <p>Planets In Our Solar System</p>
            </div>
            <div class="image-card" data-title="Celestial Events Calendar">
                <img src="1Events.jpg" alt="Celestial Events" style="border-radius: 10px; width: 100%; height: 100%; object-fit: cover;">
                <p>Celestial Events Calendar</p>
            </div>
            </div>
        </div>
    </section>
<!-- This here is the constellations page and the information on this tab -->
    <section id="constellations" class="tab-content">
        <h2>Constellations</h2>
        <p>Learn to identify famous star patterns:</p>
        <div class="image-gallery">
            <div class="image-card" data-title="Orion - The Hunter">
                <img src="Orion.jpg" alt="Orion" style="border-radius: 15px; width: 200%; max-width: 300px; height: auto;">
                <p>Orion - The Hunter</p>
            </div>
            <div class="image-card" data-title="Ursa Major - Big Dipper">
                <img src="Dipper.jpg" alt="Ursa Major" style="border-radius: 15px; width: 200%; max-width: 300px; height: auto;">
                <p>Ursa Major - Big Dipper</p>
            </div>
            <div class="image-card" data-title="Lyra - The Harp">
                <img src="Lyra.jpg" alt="Lyra" style="border-radius: 15px; width: 200%; max-width: 300px; height: auto;">
                <p>Lyra - The Harp</p>
            </div>
        </div>
    </section>
<!-- This here is the stars page and the information on this tab -->
    <section id="stars" class="tab-content">
        <h2>Stars</h2>
        <p>Explore different types of stars:</p>
        <div class="image-gallery">
            <div class="image-card" data-title="Red Giants">
                <img src="CheetoStar.png" alt="Red Giant" style="border-radius: 15px; width: 200%; max-width: 300px; height: auto;">
                <p>Red Giants</p>
            </div>
            <div class="image-card" data-title="White Dwarfs">
                <img src="WhiteStar.jpg" alt="White Dwarf" style="border-radius: 15px; width: 200%; max-width: 300px; height: auto;">
                <p>White Dwarfs</p>
            </div>
            <div class="image-card" data-title="Supernovae">
                <img src="Nova.jpg" alt="Supernova" style="border-radius: 15px; width: 200%; max-width: 300px; height: auto;">
                <p>Supernova</p>
            </div>
        </div>
    </section>
<!-- This here is the about page and the information on this tab -->
    <section id="about" class="tab-content">
        <h2>About This Project</h2>
        <p>Stellar Stars is an educational and interactive platform created to help astronomy enthusiasts explore the cosmos.</p>
        <div class="image-gallery">
            <div class="image-card" data-title="Created by Juan Rodriguez">
                <img src="images/creator.jpg" alt="Creator">
                <p>Created by Juan Rodriguez</p>
            </div>
            <div class="image-card" data-title="Educational Guides">
                <img src="images/guide.jpg" alt="Guides">
                <p>Educational Guides</p>
            </div>
            <div class="image-card" data-title="Interactive Content">
                <img src="images/interactive.jpg" alt="Interactive">
                <p>Interactive Content</p>
            </div>
        </div>
    </section>
<!-- This here is the contact page and the information on this tab -->
    <section id="contact" class="tab-content">
        <h2>Contact</h2>
        <p>Reach out to us with questions or suggestions!</p>
        <div class="image-gallery">
            <div class="image-card" data-title="Email: stellarstars@example.com">
                <img src="images/email.jpg" alt="Email">
                <p>Email: <a href="mailto:stellarstars@example.com">stellarstars@example.com</a></p>
            </div>
            <div class="image-card" data-title="Social Media">
                <img src="images/social_media.jpg" alt="Social Media">
                <p>Social Media</p>
            </div>
            <div class="image-card" data-title="Submit Ideas / Feedback">
                <img src="images/feedback.jpg" alt="Feedback">
                <p>Submit Ideas / Feedback</p>
            </div>
        </div>
    </section>

    <footer>© 2025 Stellar Stars</footer>
</div>

<!-- LIGHTBOX -->
<div class="lightbox">
    <img src="" alt="">
    <p></p>
</div>

<!-- POPUP OVERLAY AND MODALS -->
<div class="fade"></div>

<!-- Create Account Popup -->
<div id="create-account-popup" class="popup">
<h2>Create Account</h2>
<form action="register.php" method="POST" class="account-form">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Create Account</button>
</form>
<p style="text-align:center; margin-top:10px;">
    Already have an account? <a href="#" class="switch-popup" data-target="#login-popup">Login</a>
</p>
</div>

<!-- Login Popup -->
<div id="login-popup" class="popup">
<h2>Login</h2>
<form action="login.php" method="POST" class="account-form">
    <label for="login-username">Username:</label>
    <input type="text" id="login-username" name="username" required>

    <label for="login-password">Password:</label>
    <input type="password" id="login-password" name="password" required>

    <button type="submit">Login</button>
</form>
<p style="text-align:center; margin-top:10px;">
    Don't have an account? <a href="#" class="switch-popup" data-target="#create-account-popup">Create Account</a>
</p>
</div>


<script>
$(document).ready(function() {

       // Tab navigation
    $('.tab-item').on('click', function() {
        $('.tab-item').removeClass('active');
        $(this).addClass('active');

        const target = $(this).data('target');
        $('.tab-content').removeClass('active');
        $(target).addClass('active');
    });

    // Lightbox
    $('.image-card').on('click', function() {
        const imgSrc = $(this).find('img').attr('src');
        const title = $(this).data('title');
        $('.lightbox img').attr('src', imgSrc);
        $('.lightbox p').text(title);
        $('.lightbox').fadeIn(300);
    });

    $('.lightbox').on('click', function() {
        $(this).fadeOut(300);
    });

    // Open popup
    $('.open-popup').on('click', function() {
        const target = $(this).data('target');
        $(target).fadeIn();
        $('.fade').fadeIn();
    });

    // Close popup when clicking overlay or outside form
    $('.fade, .popup').on('click', function(e) {
        if (e.target !== this) return;
        $(this).fadeOut();
        $('.popup').fadeOut();
        $('.fade').fadeOut();
    });

    // Switch between popups
    $('.switch-popup').on('click', function(e) {
        e.preventDefault();
        const target = $(this).data('target');
        $('.popup').fadeOut(200, function() {
            $(target).fadeIn(200);
        });
    });

    $('.view-images').on('click', function() {
        $('html, body').animate({
            scrollTop: $('.image-gallery').offset().top - 20
        }, 500);
    });
    
});
</script>
</script>

</body>
</html>
