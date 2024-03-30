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

    <br><br><br>

    <main>
        <section id="statistic_Header">
            <form action="rave_Dashboard.php" id="stats" method="post">




                    
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
                    <div>Total Services</div>
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

    


    </main>


    <?php
        include("html_Files\\footer.html");
    ?>

</body>
</html>