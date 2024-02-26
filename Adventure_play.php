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
                    <img src="Resources\Images\Adventure\Kiddie_Playland\kp1.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Kiddie_Playland\kp2.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Kiddie_Playland\kp3.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Kiddie_Playland\kp4.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Adventure\Kiddie_Playland\kp5.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- desc section -->
        <section id="desc">
            <div id="solo_Attraction" style="justify-content: center; text-align:center">
                <div id="description">
                    <h2>Kiddie Playland</h2>
                    <p>For the youth, the Kiddie Playground uses child-friendly materials and some additional swing, slides, seesaw and a mini obstacle course.</p>
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