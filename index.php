<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="global_Palette.css">
    
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

            
        </section>


        <section class="genre">
            
        </section>
    </main>
    

</body>
</html>