<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global_Palette.css">
    <link rel="stylesheet" href="css_Files\nature.css">
    <title>Rave</title>
</head>
<body>
    <!-- header -->
    <?php
        include("html_Files\\header.html");
    ?>

    <main>
        <div id="attraction_Header">
            <img class="attration_HeaderImage" src="Resources/Images/attractions_Header/Fauna.jpg" alt="">
            <div id="attraction_HeaderDesc">NATURE</div>
        </div>

        <div id="cards">
            <div id="cards_Children">
                <div class="cards_Desc">Botanical Garden</div>
                <img src="Resources\Images\Nature\botanical_Garden\bg1.jpg" alt="">
            </div>
            <div id="cards_Children">
                <div class="cards_Desc">Flower Park</div>
                <img src="Resources\Images\Nature\flower_Park\fp1.jpg" alt="">
            </div>
            <div id="cards_Children">
                <div class="cards_Desc">Pasig Zoo</div>
                <img src="Resources\Images\Nature\Pasig_Zoo\pz1.jpg" alt="">
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>