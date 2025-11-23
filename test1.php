<!-- Juan Rodriguez November 23rd, 2025 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar Stars</title>
     <!-- The link to CSS stylesheet -->
    <link rel="stylesheet" href="FinalePage1.css">
    
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</head>
<body>
    <?php
    // PHP variables
    $siteName = "Stellar Stars";
    $currentYear = date("Y");
    $navItems = ["Contact", "Stars", "Home", "Constellations", "About"];
    ?>
    
    <div class="container">
        <!-- this is the top of the page-->
        <div class="logo"><?php echo $siteName; ?></div>
        
        <!-- This is for the navagation tabs -->
        <nav>
            <?php foreach ($navItems as $index => $item): ?>
                <button class="nav-tab <?php echo $index === 2 ? 'active' : ''; ?>" 
                        data-page="<?php echo strtolower($item); ?>">
                    <?php echo $item; ?>
                </button>
            <?php endforeach; ?>
        </nav>
        
        <!-- This is for the text under the navagation tabs -->
        <div class="description">
            <p>Explore and Consume The Knowledge Of Space And It's Wonders.</p>
        </div>
        
        <!-- This is what will be on the action button -->
        <div class="cta-section">
            <h2>Explore The Stars and It's Beautiful Scenes<br>[Start Now]</h2>
            <button class="cta-button" id="startBtn">Begin Your Journey</button>
        </div>
        
        <!-- Here are where the images will be held -->
        <div class="image-gallery">
            <div class="image-card">
                <div class="image-placeholder">🌌</div>
            </div>
            <div class="image-card">
                <div class="image-placeholder">🌠</div>
            </div>
        </div>
        
        <!-- This is the bottom of the page where the footer is -->
        <footer>
            <p>(Footer of the page)</p>
            <p>© <?php echo $currentYear; ?> <?php echo $siteName; ?></p>
        </footer>
    </div>
    
    <script>
        $(document).ready(function() {
            
            // Handle tab clicks
            $('.nav-tab').on('click', function() {
                // Remove active class from all tabs
                $('.nav-tab').removeClass('active');
                // Add active class to clicked tab
                $(this).addClass('active');
                
                // Gets page name
                var page = $(this).data('page');
                console.log('Navigating to: ' + page);
            });
            
            // This will handle the start button click
            $('#startBtn').on('click', function() {
                // Scroll to image gallery
                $('html, body').animate({
                    scrollTop: $('.image-gallery').offset().top - 20
                }, 500);
            });
            
            // this handles image card clicks
            $('.image-card').on('click', function() {
                alert('Image clicked! This would open a larger view.');
            });
            
        });
    </script>
</body>
</html>