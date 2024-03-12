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
                    <img src="Resources\Images\Nature\Pasig_Zoo\pz1.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Nature\Pasig_Zoo\pz2.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Nature\Pasig_Zoo\pz3.jpg" alt="">
                </div>
                <div id="cards_Children">
                    <img src="Resources\Images\Nature\Pasig_Zoo\pz5.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- desc section -->
        <section id="desc">
            <div id="solo_Attraction">
                <div id="description">
                    <h2>PASIG ZOO</h2>
                    <p>The zoo is composed of an aviary, a vivarium and a petting zoo where children can touch the animals. There are also fences that house different kinds of animals.</p>
                </div>
                <div id="rates">
                    <h4>Flower Park Rates</h4>
                    <ul>
                        <li>Pasigueños (one-entry) - 10.00Php</li>
                        <li>Non-Pasigueños (one-entry) - 20.00Php</li>
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
    </main>

    <!-- footer -->
    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>