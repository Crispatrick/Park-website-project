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
                    <img src="Resources\Images\Leisure\boating_Lagoon\bl1.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\boating_Lagoon\bl2.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\boating_Lagoon\bl3.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\boating_Lagoon\bl4.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\boating_Lagoon\bl5.jpg" alt="">
                </div>

            </div>
        </section>

        <!-- desc section -->
        <section id="desc">
            <div id="solo_Attraction">
                <div id="description">
                    <h2>Adventure Park</h2>
                    <p>For those who love extreme sports, try RAVE’s new and improved Adventure Park. Some of the features are the skate park, rappelling & wall climbing, an obstacle course, and the tallest and longest Zip Line in Metro Manila (18 meters and 200 meters long.) This place is best for Team Building and other company recreational activities.</p>
                </div>
                <div id="rates">
                    <h4>Zip Line</h4>
                    <ul>
                        <li>Pasigueños (one-way) - 80.00Php <br>
                            (round trip) - 130.00Php
                        </li>
                        <li>Non-Pasigueños (one-way) - 130.00Php <br>
                            (round trip) - 180.00Php
                        </li>
                    </ul>

                    <h4>Wall Climbing & Rapelling</h4>
                    <ul>
                        <li>
                            Pasigueños (1st 3 Hours) - 100.00Php <br>
                            Per succeeding hour/s - 50.00Php
                        </li>
                        <li>Non-Pasigueños (1st 3 Hours) - 150.00Php <br> 
                        Per succeeding hour/s - 50.00Php
                        </li>
                    </ul>

                    <!-- button link for booking page -->
                    <div style="padding: 0px; display:flex;justify-content:end">
                        <input style="letter-spacing: 2px; padding: 5px; font-size:1.3rem" class="btnBooking" type="submit" value="BOOK" name="confirm" onClick="window.location.href='B_All.php'">
                    </div>
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