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
            <div id="cards_Container">
                <div class="cards">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus consectetur est iusto sapiente odio fugit quaerat quae exercitationem consequuntur maiores a nostrum repellat aperiam libero repellendus, deleniti earum voluptate pariatur?</div>
                <div class="cards">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam eius facilis, laborum ducimus odio modi magnam, ut voluptatum sunt accusantium molestias dolore. Dolorem nobis tempora eaque culpa sunt, error est.</div>
                <div class="cards">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam eius facilis, laborum ducimus odio modi magnam, ut voluptatum sunt accusantium molestias dolore. Dolorem nobis tempora eaque culpa sunt, error est.</div>
            </div>
        </section>


    </main>
    

</body>
</html>