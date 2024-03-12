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
                    <h2>Boating Lagoon</h2>
                    <p>This man-made lagoon is one of the newest attractions of RAVE. You can relax yourself while slowly pedalling your boat as you gaze on the various schools of fish underwater.</p>
                </div>
                <div id="rates">
                    <h4>Boat Rental</h4>
                    <ul>
                        <li>Pasigueños</li>
                        <ul>
                            <li>Adult - 40.00Php</li>
                            <li>Children (4 ft. & below) - 20.00Php</li>
                        </ul>
                        <li>Non-Pasigueños</li>
                        <ul>
                            <li>Adult - 50.00Php</li>
                            <li>Children (4 ft. & below) - 30.00Php</li>
                        </ul>
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
    </main>

    <!-- footer -->
    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>