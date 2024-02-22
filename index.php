<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="global_Palette.css">
    <title>Rave</title>
</head>
<body>
    <!-- for header -->
    <?php
        include("html_Files\\header.html");
    ?>

    <main>
        <!-- Banner/Hero Section -->
        <section class="hero" id="scroll_Hero">
            <!-- this is the background -->
            <video muted autoplay class="hero_Video" id="videoPlayer">
                <source src="Resources\Videos\RAVE_3.webm">
            </video>   
            <!-- Seems that you need to initialize the video html tag first before executing an event listener for it -->
            <script src="js_Files\video_Player.js"></script>        
            
            <img src="Resources\Images\aboutlogo.png" alt="" id="logo">
            <h1 id="park_Welcome">A park that is <span id="park_Welcome_Text">GUARANTEED</span> to please the whole family!</h1>  
        </section>


        <!-- attraction Section -->
        <section class="genre" id="scroll_Attraction">
            <div id="attractions_Header">
                <h1>ATTRACTIONS</h1>
            </div>
            <div id="cards_Container">
                <a href="Nature.php">
                    <div class="cards">
                        <h3>NATURE</h3>
                        <img src="Resources\Images\attractions\bg5.jpg" alt="">
                    </div>
                </a>
                <a href="leisure.php">
                    <div class="cards">
                        <h3>LEISURE</h3>
                        <img src="Resources\Images\attractions\ca3 cropped.jpg" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="cards">
                        <H3>ADVENTURE</H3>
                        <img src="Resources\Images\attractions\ap3.jpg" alt="">
                    </div>
                </a>
            </div>

            <section id="highlights">
                
                <div class="item_Highlight">
                    <img src="Resources\Images\attractions\ap4.jpg" alt="">
                    <div class="highlight_Desc">
                        <h3>Embark on an Epic Adventure!</h3>
                        <p>Get ready for an adrenaline rush as you tackle 
                            thrilling activities like hiking rugged trails,
                            conquering rock faces, and soaring through the 
                            air on zip lines in the park.</p>
                    </div>
                </div>
                
                <div class="item_Highlight"> 
                    <img src="Resources\Images\attractions\pg2.jpg" alt="">
                    <div class="highlight_Desc">
                        <h3>Indulge in Blissful Leisure!</h3>
                        <p>Experience pure relaxation and joy as you enjoy 
                            leisurely picnics, tranquil strolls, and birdwatching 
                            amidst the serene beauty of the park.</p>
                    </div>
                </div>
                
                <div class="item_Highlight">
                    <img src="Resources\Images\attractions\bg1.jpg" alt="">
                    <div class="highlight_Desc">
                        <h3>Marvel at the Wonders of Nature!</h3>
                        <p>Prepare to be awestruck by the breathtaking biodiversity 
                            and ecological marvels of the park, from lush forests 
                            to vibrant wildlife habitats, offering an unforgettable 
                            connection with the natural world.</p>
                    </div>
                    
                </div>
        


            
            </section>
        </section>


        <section id="about">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2730.452022387123!2d121.09711075565221!3d14.573855914384826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7ea14ea41f1%3A0x5951aed87ce31a13!2sPasig%20Rainforest%20Park!5e0!3m2!1sen!2sph!4v1708099321575!5m2!1sen!2sph" width="100%"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="about_GMap"></iframe>
            <div id="about_DescContainer">
                <div id="about_Desc">
                    <h3 id="about_Header">
                        About
                    </h3>
                    <div id="about_Paragraphs">
                        <p>
                        It's a big city out there and it's growing at an exhausting pace. And when you find yourself always following the same crowd, sometimes it helps to follow your own trail. Sometimes, all you need is the right fix to keep you going.
                        </p>
                        <p>
                        Whether it’s a refreshing dip in the pool, the adrenaline rush of scaling walls, or just the inner calm that comes with communing with nature, whatever your fix, you can find it in Rainforest Park. And when your visit comes to an end, you may leave a trail behind you, but Rainforest memories would remain with you all the way back to the big city.
                        </p>
                        <p>
                        It’s not a long way away. Go ahead. Pick a trail and find a fix.
                        </p>
                    </div>
                </div>
                <div id="about_Image">
                    <img src="Resources\Images\mapmarkers_BG.png" alt="">
                </div>
            </div>  
        </section>
    </main>


    <?php
        include("html_Files\\footer.html");
    ?>

</body>
</html>