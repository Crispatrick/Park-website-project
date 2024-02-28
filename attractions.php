<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global_Palette.css">
    <link rel="stylesheet" href="css_Files\attractions.css">
    <link rel="stylesheet" href="css_files\cards.css">
    <title>Rave</title>
</head>
<body>
    <!-- header -->
    <?php
        include("html_Files\\header.html");
    ?>

    <main>
        <section id="nature_Scroll">
            <div id="attraction_Header">
                <img class="attration_HeaderImage" src="Resources/Images/attractions_Header/Fauna.jpg" alt="">
                <div id="attraction_HeaderDesc">NATURE</div>
            </div>
            <div id="cards">
                <div id="cards_Children">
                    <div class="cards_Desc">Botanical Garden</div>
                    <a href="botanical_Garden.php">
                        <img src="Resources\Images\Nature\botanical_Garden\bg1.jpg" alt="">
                    </a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Flower Park</div>
                    <a href="flower_Park.php"><img src="Resources\Images\Nature\flower_Park\fp1.jpg" alt=""></a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Pasig Zoo</div>
                    <a href="pasig_Zoo.php"><img src="Resources\Images\Nature\Pasig_Zoo\pz1.jpg" alt=""></a>
                </div>
            </div>
        </section>


        <section id="leisure_Scroll">
            <div id="attraction_Header">
                <img class="attration_HeaderImage leisure" src="Resources/Images/attractions_Header/Okayu.jpg" alt="">
                <div id="attraction_HeaderDesc">LEISURE</div>
            </div>
            <div id="cards">
                <div id="cards_Children">
                    <div class="cards_Desc">Mini Train</div>
                    <a href="train.php"><img src="Resources\Images\Leisure\Mini_Train_Station\ms1.jpg" alt=""></a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Boating Lagoon</div>
                    <a href="boat.php"><img src="Resources\Images\Leisure\boating_Lagoon\bl1.jpg" alt=""></a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Camping Area</div>
                    <a href="camp.php"><img src="Resources\Images\Leisure\Camping Area\ca2.jpg" alt=""></a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Picnic Grove</div>
                    <a href="picnic.php"><img src="Resources\Images\Leisure\Picnic_Grove\pg1.jpg" alt=""></a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Promenade Area</div>
                    <a href="prom_Area.php"><img src="Resources\Images\Leisure\Promenade_Area\pa1.jpg" alt=""></a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Rave Amphitheater</div>
                    <a href="rave_Amphi.php"><img src="Resources\Images\Leisure\Rave_Amphitheater\amp1.jpg" alt=""></a>
                </div>
                <div id="cards_Children">
                    <div class="cards_Desc">Water Park</div>
                    <a href="water_Park.php"><img src="Resources\Images\Leisure\Water_Park\wp1.jpg" alt=""></a>
                </div>
            </div>
        </section>
    

        <section id="adventure_Scroll">
            <div id="attraction_Header">
                <img class="attration_HeaderImage" src="Resources\Images\attractions_Header\Marine.jpg" alt="">
                <div id="attraction_HeaderDesc">ADVENTURE</div>
            </div>


            <div id="cards">
                <div id="cards_Children">
                    <div class="cards_Desc">Basketball Court</div>
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