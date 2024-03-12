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
                    <img src="Resources\Images\Leisure\Water_Park\wp1.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\Water_Park\wp2.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\Water_Park\wp3.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\Water_Park\wp4.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Leisure\Water_Park\wp5.jpg" alt="">
                </div>

            </div>
        </section>

        <!-- desc section -->
        <section id="desc">
            <div id="solo_Attraction">
                <div id="description">
                    <h2>WATER PARK</h2>
                    <p>It houses the biggest, most beautiful and most modernized swimming pools around Metro Manila. Consisting of two adult swimming pools, two pools for kids, and a mini Olympic-sized pool. The newly-constructed water rapids that flows around the Mini-Olympic-sized pool area is guaranteed to please the whole family and enjoy the scenery as you float away. Other facilities include various water slides, a pavilion, cottages, and picnic tables.</p>
                </div>
                <div id="rates">
                    <h4>Rapid Rides</h4>
                    <ul>
                        <li>Adult (one-way) - 50.00Php</li>
                        <li>Children (4 ft. & below) (one-way) - 30.00Php</li>
                    </ul>
                    <h4>Waterpark Pavilion</h4>
                    <ul>
                        <li>1st 3 Hours - 2,000.00Php</li>
                        <li>Per succeeding hour/s - 500.00Php</li>
                    </ul>
                    <h4>Water Park Cottages</h4>
                    <ul>
                        <li>Fixed Rate - 500.00Php</li>
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