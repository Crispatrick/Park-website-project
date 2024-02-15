<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global_Palette.css">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">

    
    <title>Rave</title>
</head>
<body>
    <!-- for header -->
    <?php
        include("header.html");
    ?>

    <main>
        <section class="hero">
            <!-- this is the background -->
            <video muted autoplay class="hero_Video" id="videoPlayer">
                <source src="Resources\Videos\RAVE_3.webm">
            </video>   
            <!-- Seems that you need to initialize the video html tag first before executing an event listener for it -->
            <script src="js_Files\video_Player.js"></script>        
            
            <img src="Resources\Images\aboutlogo.png" alt="" id="logo">
            <h1 id="park_Welcome">A park that is <span id="park_Welcome_Text">GUARANTEED</span> to please the whole family!</h1>  
            

        </section>


        <section class="genre">
            <div id="attractions_Header">
                <h1>ATTRACTIONS</h1>
            </div>
            <div id="cards_Container">
                <div class="cards">
                    <h3>NATURE</h3>
                    <img src="Resources\Images\attractions\bg5.jpg" alt="">
                </div>
                <div class="cards">
                    <h3>LEISURE</h3>
                    <img src="Resources\Images\attractions\ca3 cropped.jpg" alt="">
                </div>
                <div class="cards">
                    <H3>ADVENTURE</H3>
                    <img src="Resources\Images\attractions\ap3.jpg" alt="">
                </div>
            </div>
        </section>

        

        <section id="highlights">
            
        </section>


    </main>
    

</body>
</html>