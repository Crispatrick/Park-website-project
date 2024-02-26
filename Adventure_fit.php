<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global_Palette.css">
    <link rel="stylesheet" href="css_files\cards.css">
    <link rel="stylesheet" href="css_Files\solo_Attraction.css">
    <title>Document</title>
</head>
<body>
        <!-- header -->
    <?php
        include("html_Files\\header.html");
    ?>

    <main>
        <!-- gallerie section -->
        <section>
            <div id="cards">
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Fitness_Center\fc1.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Fitness_Center\fc2.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Fitness_Center\fc3.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Fitness_Center\fc4.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Fitness_Center\fc5.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- desc section -->
        <section id="desc">
            <div id="solo_Attraction" style="justify-content: center; text-align:center">
                <div id="description">
                    <h2>Fitness Center</h2>
                    <p>According to physical fitness enthusiasts, the RAVE Fitness Center is the biggest and the most modern gym in Metro Manila that’s run by the local government. It offers different fitness classes such as Weight-Training (Body-Building), Aerobics, Tae-bo, Zumba and Belly-dancing.</p>
                </div>
            </div>   
        </section>

        <!-- nav section -->
        <section>
            <div id="cards">
                    <div id="cards_Children">
                        <div class="Adventure_cards_Desc">Court</div>
                        <a href="Adventure_court.php"><img src="Resources\Images\Adventure\Court\tb1.jpg" alt=""></a>
                    </div>
                    <div id="cards_Children">
                        <div class="cards_Desc">Adventure Park</div>
                        <a href="Adventure_adventure.php"><img src="Resources\Images\Adventure\Adventure_Park\ap5.jpg"alt=""></a>
                    </div>
                    <div id="cards_Children">
                        <div class="cards_Desc">Fitness Center</div>
                        <a href="Adventure_fit.php"><img src="Resources\Images\Adventure\Fitness_Center\fc1.jpg" alt=""></a>
                    </div>
                    <div id="cards_Children">
                        <div class="cards_Desc">Kiddie Playland</div>
                        <a href="Adventure_play.php"><img src="Resources\Images\Adventure\Kiddie_Playland\kp1.jpg" alt=""></a>
                    </div>
                    <div id="cards_Children">
                        <div class="cards_Desc">Maze Garden</div>
                        <a href="Adventure_maze.php"><img src="Resources\Images\Adventure\Maze_Garden\mg2.jpg" alt=""></a>
                    </div>
            </div>
        </section>

    </main>

    <!-- footer -->
    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>