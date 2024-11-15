<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_Files\receipt.css">
    <title>Document</title>
</head>
<body>
    <?php
        include("html_Files\\header.html");
        

        //to share the data in oop part and future plans
        session_start();
        $_SESSION["comment"] = $_POST["comment"];
        $_SESSION["payment"] = $_POST["cards"];
        $_SESSION["fname"] = $_POST["fname"];
        $_SESSION["lname"] = $_POST["lname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["phone"] = $_POST["phone"];
        $_SESSION["quantity"] = $_POST["quantity"];
        $_SESSION["schedule"] = $_POST["schedule"];
        $_SESSION["pasigueno"] = $_POST["pasigueno"];  
        
        



        //*database insert query
                include("databaseCon.php");

        $selectedDate = new DateTime($_POST["schedule"]);
        $currentDate = new DateTime();

        if ($selectedDate < $currentDate) {
            echo "<script type='text/javascript'>
                    alert('Cannot book for a past date.');
                    window.location.href = 'b_all.php';
                </script>";
            exit(); 
        }

        // Insert data into database
        try {
            $query = 'INSERT INTO bookingInfo(fname, lname, email, contact, 
                                                schedule, pax, pasigueno, comments, payment)
                            VALUES(:fname, :lname, :email, :contact, 
                            :schedule, :pax, :pasigueno, :comments, :payment)';
            $queryPrep = $pdo->prepare($query);
            $queryPrep->execute(['fname' => $_SESSION["fname"], 
                                'lname' => $_SESSION["lname"], 
                                'email' => $_SESSION["email"],
                                'contact' => strval($_SESSION["phone"]),
                                'schedule' => $_SESSION["schedule"],
                                'pax' => (int)$_POST["quantity"],
                                'pasigueno' => $_SESSION["pasigueno"],
                                'comments' => $_SESSION["comment"],
                                'payment' => $_SESSION["payment"]
                                ]);
        } catch (PDOException $e) {
            echo "<script type = 'text/javascript'>
                    alert(\"Error: Please check your query.\")
                </script>";
            die();
        }

    ?>

    <main>
    <!-- <div class="blur-overlay"></div> -->
        <div id="receipt">
            <h3 id="receipt_Header">Personal Information</h3>
            <section id="personal_InfoCon">
                <section class="personal_Info">
                    <div>First Name: </div>
                    <div>Last Name: </div>
                    <div>Email: </div>
                    <div>Contact: </div>
                    <div>Schedule: </div>
                    <div>Pax: </div>
                    <div>Pasigueño: </div>
                    <div>Comments </div>
                </section>
                <section class="personal_Info">
                    <?php
                        if (isset($_POST["confirm"])) {
                            echo "<div>" . $_POST["fname"] . "</div>";
                            echo "<div>" . $_POST["lname"] . "</div>";
                                if (isset( $_POST["email"]) && !empty( $_POST["email"])) {
                                    echo "<div>" . $_POST["email"] . "</div>";
                                }else {
                                    echo "<div>" . "Not Available" . "</div>";
                                }
                                if (isset( $_POST["phone"]) && !empty( $_POST["phone"])) {
                                    echo "<div>" . $_POST["phone"] . "</div>";
                                }else {
                                    echo "<div>" . "Not Available" . "</div>";
                                }
                            echo "<div>" . $_POST["schedule"] . "</div>";
                            // $pax = (int);
                            echo "<div>" . $_POST["quantity"] . "</div>";
                                if (isset( $_POST["pasigueno"]) && !empty( $_POST["pasigueno"])) {
                                    echo "<div>" . $_POST["pasigueno"] . "</div>"; 
                                }else {
                                    echo "<div>" . "Not Available" . "</div>";
                                }

                            
                        } else {
                            echo "di gumagana par";
                        }


                    ?>
                </section>


            </section>

            
            <?php
                echo "<div style=\"margin-right:200px; margin-left:200px;  text-align:center; background-color:var(--dark_Blue); padding:30px;\">" . $_POST["comment"] . "</div>";
            ?>
            <hr style="width:100%;text-align:left;margin-left:0;">


             <!-- Add QR Code here -->
             <div id="qrCodeSection" style="text-align:center; margin-top:20px;">
                <h3>Scan the QR Code to Pay</h3>
                <img src="./Resources/Images/qrCode.png" alt="QR Code" style="max-width:200px; margin-top:20px;">
            </div>

            <hr style="width:100%;text-align:left;margin-left:0;">


            <?php
                if (isset($_POST["nature_Checkbox"]) || isset($_POST["leisure_Checkbox"]) || isset($_POST["adventure_Checkbox"])) {
                    
                    // initializing variables
                    $nature;
                    $leisure;
                    $adventure;

                    $init_Value;
                    $sum = 0;


                    if (isset($_POST["nature_Checkbox"])) {
                        $nature = $_POST["nature_Checkbox"];
                        $_SESSION["nature"] = $nature; 
                    }
                    
                    if (isset($_POST["leisure_Checkbox"])) {
                        $leisure = $_POST["leisure_Checkbox"];
                        $_SESSION["leisure"] = $leisure;   
                    }

                    if (isset($_POST["adventure_Checkbox"])) {
                        $adventure = $_POST["adventure_Checkbox"];
                        $_SESSION["adventure"] = $adventure; 
                    }
                    
                       
                   
                     


                    // showing variables
                    echo "<h3 id=\"receipt_Header\">Booked:</h3>";

                    echo "<div id=\"booked\">";
                    // nature booking
                    if (!empty($nature)) {
                        echo "<div> <div id=\"receipt_Header\">Nature</div>";
                        echo "<ol>";
                        foreach ($nature as $natures) {
                            switch ($natures) {
                                case 'Butterfly Pavillion':
                                    if ($_POST["pasigueno"] == "You're a Pasigueño!") {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 20;
                                        $sum += $init_Value;
                                    }
                                    
                                    
                                    break;
                                case 'Flower Park':
                                    if ($_POST["pasigueno"] == "You're a Pasigueño!") {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 20;
                                        $sum += $init_Value;
                                    }
                                    break;
                                case 'Pasig Zoo':
                                    if ($_POST["pasigueno"] == "You're a Pasigueño!") {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 20;
                                        $sum += $init_Value;
                                    }
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }

                            echo "<li>" . $natures . " - " . $init_Value. "₱</li>";
                            $init_Value = 0;
                        }
                        echo "</ol></div>";
                    }

                    // laisure booking
                    if (!empty($leisure)) {
                        echo "<div> <div id=\"receipt_Header\">Leisure</div>";
                        echo "<ol>";
                        foreach ($leisure as $leisures) {
                            switch ($leisures) {
                                case 'Rapid Rides':
                                    if ($_POST["pasigueno"] === "You're a Pasigueño!") {
                                        $init_Value = 30;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 50;
                                        $sum += $init_Value;
                                    }
                                    break;
                                case 'Waterpark Pavillion':
                                    $init_Value = 2000;
                                    $sum += $init_Value;
                                    break;
                                case 'Amphitheater':
                                    $init_Value = 2000;
                                    $sum += $init_Value;
                                    break;
                                case 'Picnic Ground':
                                    $init_Value = 2000;
                                    $sum += $init_Value;
                                    break;
                                case 'Mini Train':
                                    if ($_POST["pasigueno"] === "You're a Pasigueño!") {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 20;
                                        $sum += $init_Value;
                                    }
                                    break;
                                case 'Boat Rental':
                                    if ($_POST["pasigueno"] == "You're a Pasigueño!") {
                                        $init_Value = 40;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 50;
                                        $sum += $init_Value;
                                    }
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }

                            echo "<li>" . $leisures ." - " . $init_Value.  "₱</li>";
                            $init_Value = 0;
                        }
                        echo "</ol></div>";
                    }


                    // adventure booking
                    if (!empty($adventure)) {
                        echo "<div> <div id=\"receipt_Header\">Adventure</div>";
                        echo "<ol>";
                        foreach ($adventure as $adventures) {
                            switch ($adventures) {
                                case 'MAZE Garden':
                                    if ($_POST["pasigueno"] == "You're a Pasigueño!") {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }
                                    
                                    
                                    break;
                                case 'Zip Line':
                                    if ($_POST["pasigueno"] == "You're a Pasigueño!") {
                                        $init_Value = 80;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 130;
                                        $sum += $init_Value;
                                    }
                                    break;
                                case 'Obstacles Courses':
                                    if ($_POST["pasigueno"] == "You're a Pasigueño!") {
                                        $init_Value = 100;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 150;
                                        $sum += $init_Value;
                                    }
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                            echo "<li>" . $adventures ." - " . $init_Value.  "₱</li>";
                            $init_Value = 0;    
                        }
                        echo "</ol></div>";
                    }
                    echo "</div>";


                }else {
                    echo "wala kang binook par. Umay";
                }


                echo "<hr style=\"width:100%;text-align:left;margin-left:0;\">";
                if (isset($_POST["cards"])) {
                    $pax = (int)$_POST["quantity"];
                    $orig = $sum;
                    $_SESSION["orig"] = $orig; 

                    // echo $sum . " original value";
                    $sum = $sum*$pax;
                    $_SESSION["sum"] = $sum; 
                    // $sum *= 
                    echo "<h5 style=\"text-align:center; margin:0;\">Total payment is {$sum}₱ ({$orig}₱ x {$pax} Pax) via {$_POST["cards"]}</h5>";
                } else {
                    echo "San ka mag babayad Idol?";
                }
                
            ?>
        
            <div id="btnCon">
                <button class="btnBooking" onClick="window.location.href='index.php'">Confirm</button>
            </div> 
            
            <script>
                function confirmation() {
                    window.alert("Thanks you for Booking!");
                    window.location.href = "index.php";
                }
            </script>
                
        </div>
    </main>


    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>