<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>"> 
    <link rel="stylesheet" href="global_Palette.css">
    <link rel="stylesheet" href="css_Files\rave_dashboard.css">
    <title>Rave</title>
</head>
<body>
    <!-- for header -->
    <?php
        include("html_Files\\header.html");
    ?>

    <main>
        <!-- Banner/Hero Section -->
        <section class="hero" id="scroll_Hero">
            <!-- this is the background -->
            <video muted autoplay class="hero_Video" id="videoPlayer">
                <source src="Resources\Videos\RAVE_3.webm">
            </video>   
            <!-- Seems that you need to initialize the video html tag first before executing an event listener for it -->
            <script src="js_Files\video_Player.js"></script>        
            
            <img src="Resources\Images\aboutlogo.png" alt="" id="logo">
            <h1 id="park_Welcome">A park that is <span id="park_Welcome_Text">GUARANTEED</span> to please the whole family!</h1>  
        </section>


        <!-- attraction Section -->
        <section class="genre" id="scroll_Attraction">
            <div id="attractions_Header">
                <h1>ATTRACTIONS</h1>
            </div>
            <div id="cards_Container">
                <a href="attractions.php #nature_Scroll">
                    <div class="cards">
                        <h3>NATURE</h3>
                        <img src="Resources\Images\attractions\bg5.jpg" alt="">
                    </div>
                </a>
                <a href="attractions.php #leisure_Scroll">
                    <div class="cards">
                        <h3>LEISURE</h3>
                        <img src="Resources\Images\attractions\ca3 cropped.jpg" alt="">
                    </div>
                </a>
                <a href="attractions.php #adventure_Scroll">
                    <div class="cards">
                        <H3>ADVENTURE</H3>
                        <img src="Resources\Images\attractions\ap3.jpg" alt="">
                    </div>
                </a>
            </div>

            <section id="highlights">
                
                <div class="item_Highlight">
                    <img src="Resources\Images\attractions\ap4.jpg" alt="">
                    <div class="highlight_Desc">
                        <h3>Embark on an Epic Adventure!</h3>
                        <p>Get ready for an adrenaline rush as you tackle 
                            thrilling activities like hiking rugged trails,
                            conquering rock faces, and soaring through the 
                            air on zip lines in the park.</p>
                    </div>
                </div>
                
                <div class="item_Highlight"> 
                    <img src="Resources\Images\attractions\pg2.jpg" alt="">
                    <div class="highlight_Desc">
                        <h3>Indulge in Blissful Leisure!</h3>
                        <p>Experience pure relaxation and joy as you enjoy 
                            leisurely picnics, tranquil strolls, and birdwatching 
                            amidst the serene beauty of the park.</p>
                    </div>
                </div>
                
                <div class="item_Highlight">
                    <img src="Resources\Images\attractions\bg1.jpg" alt="">
                    <div class="highlight_Desc">
                        <h3>Marvel at the Wonders of Nature!</h3>
                        <p>Prepare to be awestruck by the breathtaking biodiversity 
                            and ecological marvels of the park, from lush forests 
                            to vibrant wildlife habitats, offering an unforgettable 
                            connection with the natural world.</p>
                    </div>
                    
                </div>
        


            
            </section>
        </section>


        <section id="statistic_Header">
            <form action="index.php #statistic_Header" id="stats" method="post">    
                <div class="stats_Num_Children">
                    <div id="data">
                        <!-- dito yung query ng database -->
                        <?php
                            // session_start();
                            include("databaseCon.php");

                            if (isset($_POST['date'])) {
                                $date = $_POST['date'];
                                try {
                                    $query = ('SELECT * FROM bookingInfo where schedule = :schedule');
                                    $queryPrep = $pdo->prepare($query);
                                    $queryPrep->execute(['schedule' => $date]);
        
                                    echo $queryPrep->rowCount();
                                } catch (PDOException $e) {
                                    echo "<script type = 'text/javascript'>
                                            alert(\"ehhh mali syntax ng query mo par.\")
                                        </script>";
                                    die();
                                }


                                // echo "Test 1";
                            } else {
                                try {
                                    $query = $pdo->query('SELECT * FROM bookinginfo WHERE schedule = CURRENT_DATE');
                                    echo $query->rowCount();
                                } catch (PDOException $e) {
                                    echo "<script type = 'text/javascript'>
                                            alert(\"ehhh mali syntax ng query mo par.\")
                                        </script>";
                                    die();
                                }

                                // echo "Test 2";
        
                            }
                    

                        ?>

                    </div>
                    
                    <div>
                        <label for="date">Booked by date</label>
                    </div>
                    
                    <div class="statsBox">
                       
                        <input type="date" name="date" id="date" class="types_Size types_Decor" value="<?php if (isset($_POST['date'])) {echo $_POST['date'];} ?>">


                        <!-- this script below is via chatgpt. it gets the current date and use it as placeholder in date input type -->
                        <!-- <script>
                            // Getting today's date with the right vibes
                        let today = new Date();
                        let date = today.getDate();
                        let month = today.getMonth() + 1; // Jazzing up the month since it starts at 0
                        let year = today.getFullYear();

                        // Adding a leading zero to the mix for single digit month and date
                        if (date < 10) {
                            date = '0' + date;
                        }
                        if (month < 10) {
                            month = '0' + month;
                        }

                        // Composing the date in the format that the date input loves: YYYY-MM-DD
                        let formattedToday = `${year}-${month}-${date}`;

                            // And now, the magic move - setting the date input's value to today
                            document.getElementById('date').value = formattedToday;
                        </script> -->
                    </div>

                </div>



                <div class="stats_Num_Children">
                    <div id="dataHead">
                       <?php
                            try {
                                $query = $pdo->query('SELECT * FROM bookinginfo');
                                echo $query->rowCount();
                            } catch (PDOException $e) {
                                echo "<script type = 'text/javascript'>
                                        alert(\"ehhh mali syntax ng query mo par.\")
                                    </script>";
                                die();
                            }
                        
                        ?>
                    </div>
                    <div>Total of people booked</div>
                    <!-- update button -->
                    <div style="display: flex; justify-content:center">
                        <input style="letter-spacing: 2px; padding: 0px; font-size:1rem; min-width:0px; width:100px; height:30px;" class="btnBooking" type="submit" value="UPDATE" name="confirm">        
                    </div>


                    
                </div>



                <div class="stats_Num_Children">
                    <div id="data">
                        <!-- dito yung query ng database -->
                        
                        <?php
                            // session_start();
                            include("databaseCon.php");

                            if (isset($_POST['pasigueno']) && $_POST['pasigueno'] === "No") {
                                // $pasigue = $_POST['pasigueno'];
                                try {
                                    $query = $pdo->query('SELECT * FROM bookingInfo where pasigueno = "You\'re not a Pasigueño!"');
        
                                    echo $query->rowCount();
                                } catch (PDOException $e) {
                                    echo "<script type = 'text/javascript'>
                                            alert(\"ehhh mali syntax ng query mo par.\")
                                        </script>";
                                    die();
                                }


                                // echo "Test 1";
                            } else {
                                try {
                                    $query = $pdo->query('SELECT * FROM bookingInfo where pasigueno = "You\'re a Pasigueño!"');
        
                                    echo $query->rowCount();
                                } catch (PDOException $e) {
                                    echo "<script type = 'text/javascript'>
                                            alert(\"ehhh mali syntax ng query mo par.\")
                                        </script>";
                                    die();
                                }

                                // echo "Test 2";
        
                            }
                    

                        ?>                    
                    </div>
                    <label for="pasigueno">Pasig Resident</label>
                    <div>
                        <select id="pasigueno" name="pasigueno" class="types_Size types_Decor" >
                            <option value="select" disabled selected> 
                                <?php 
                                if (isset($_POST['pasigueno'])) {
                                    echo $_POST['pasigueno'];
                                } 
                                else {
                                    echo "-select=";
                                }
                                ?> 
                            </option>
                            <option value="Yes"> Yes </option>
                            <option value="No"> No </option>
                        </select>
                    </div>
                </div>






            </form> 
        </section>


        <section id="about">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2730.452022387123!2d121.09711075565221!3d14.573855914384826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7ea14ea41f1%3A0x5951aed87ce31a13!2sPasig%20Rainforest%20Park!5e0!3m2!1sen!2sph!4v1708099321575!5m2!1sen!2sph" width="100%"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="about_GMap"></iframe>
            <div id="about_DescContainer">
                <div id="about_Desc">
                    <h3 id="about_Header">
                        About
                    </h3>
                    <div id="about_Paragraphs">
                        <p style="font-size: 1.5rem;">
                        It's a big city out there and it's growing at an exhausting pace. And when you find yourself always following the same crowd, sometimes it helps to follow your own trail. Sometimes, all you need is the right fix to keep you going.   Whether it’s a refreshing dip in the pool, the adrenaline rush of scaling walls, or just the inner calm that comes with communing with nature, whatever your fix, you can find it in Rainforest Park. And when your visit comes to an end, you may leave a trail behind you, but Rainforest memories would remain with you all the way back to the big city. It’s not a long way away. Go ahead. Pick a trail and find a fix.
                        </p>
                    </div>
                </div>

            </div>  

            <!-- im tired and lazy now so i wont do this part in a perfect manner. Monke brain activated -->
            <section style="display: flex; justify-content:space-evenly; color:white; flex-wrap:wrap;">
                <form action="OOP_leaveMessage.php" method="post" style="display: block;">
                    <h3 id="form_Header">
                        Leave a message?
                    </h3>

                    <section id="infos">
                        <div class="inputs">
                            <label for="fname">First Name:</label>
                            <input class="types_Size types_Decor"  type="text" placeholder="Input your first name" id="fname" name="fname" required>
                        </div>
                        <div class="inputs">
                            <label for="lname">Last Name:</label>
                            <input class="types_Size types_Decor"  type="text" placeholder="Input your last name" id="lname" name="lname"required>
                        </div>
                        <div class="inputs">
                            <label for="email">Email:</label>
                            <input class="types_Size types_Decor"  type="email" placeholder="example@example.com" id="email" name="email">
                        </div>
                        <div class="inputs">
                            <label for="phone">Contact No:</label>
                            <input class="types_Size types_Decor"  type="tel" id="phone" name="phone" placeholder="Ex. 0917-123-45678" pattern="[0-9]{4}[0-9]{3}[0-9]{4}">
                        </div>
                        <div class="inputs">
                            <label for="comment">Message:</label>
                            <textarea class="types_Decor " id="comment" name="comment" rows="6" cols="49" placeholder="Leave a message?" required></textarea>
                        </div>
                        

                    </section>
                    <input style="cursor:pointer; float:right;font-size:1.2rem;letter-spacing: 0px; padding: 15px; justify-content:end; margin-top:20px;" class="btnBooking" type="submit" value="Submit">

                    <script>
                        function thanks() {
                            alert("Your meessage has been sent!");
                            event.preventDefault(); 
                        }
                    </script>

                </form>

                <div id="about_Image">
                    <img src="Resources\Images\mapmarkers_BG.png" alt="">
                </div>
            </section>
        </section>
    </main>


    <?php
        include("html_Files\\footer.html");
    ?>

</body>
</html>