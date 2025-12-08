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
        </ul>
    </nav>

    <!-- This here is the main home page and the content on this tab -->
    <section id="home" class="tab-content active">
        <h2>Welcome to Stellar Stars</h2>
        <p>Explore the wonders of the night sky through our interactive portal.</p>
        <div class="image-gallery">
            <div class="image-card" data-title="Night Sky Overview">
                <img src="images/night_sky.jpg" alt="Night Sky">
                <p>Night Sky Overview</p>
            </div>
            <div class="image-card" data-title="Planets in Our Solar System">
                <img src="images/planets.jpg" alt="Planets">
                <p>Planets in Our Solar System</p>
            </div>
            <div class="image-card" data-title="Celestial Events Calendar">
                <img src="images/celestial_events.jpg" alt="Celestial Events">
                <p>Celestial Events Calendar</p>
            </div>
        </div>
    </section>
<!-- This here is the constellations page and the information on this tab -->
    <section id="constellations" class="tab-content">
        <h2>Constellations</h2>
        <p>Learn to identify famous star patterns:</p>
        <div class="image-gallery">
            <div class="image-card" data-title="Orion - The Hunter">
                <img src="images/orion.jpg" alt="Orion">
                <p>Orion - The Hunter</p>
            </div>
            <div class="image-card" data-title="Ursa Major - Big Dipper">
                <img src="images/ursa_major.jpg" alt="Ursa Major">
                <p>Ursa Major - Big Dipper</p>
            </div>
            <div class="image-card" data-title="Lyra - The Harp">
                <img src="images/lyra.jpg" alt="Lyra">
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
                <img src="images/red_giant.jpg" alt="Red Giant">
                <p>Red Giants</p>
            </div>
            <div class="image-card" data-title="White Dwarfs">
                <img src="images/white_dwarf.jpg" alt="White Dwarf">
                <p>White Dwarfs</p>
            </div>
            <div class="image-card" data-title="Supernovae">
                <img src="images/supernova.jpg" alt="Supernova">
                <p>Supernovae</p>
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

<script>
$(document).ready(function() {

    // the tab navagation
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

 
    $('.popup').on('click', function() {
        $(this).fadeOut();
        $('.fade').fadeOut();
    });

    $('.fade').on('click', function() {
        $(this).fadeOut();
        $('.popup').fadeOut();
    });

    $('.view-images').on('click', function() {
        $('html, body').animate({
            scrollTop: $('.image-gallery').offset().top - 20
        }, 500);
    });
});
</script>

</body>
</html>
