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
    ?>

    <main>
        <div id="receipt">
            <h3 id="receipt_Header">Personal Information</h3>
            <section id="personal_InfoCon">
                <section class="personal_Info">
                    <div>First Name: </div>
                    <div>Last Name: </div>
                    <div>Email: </div>
                    <div>Contact: </div>
                    <div>Schedule: </div>
                    <div>Pasigueño: </div>
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
                    }
                    
                    if (isset($_POST["leisure_Checkbox"])) {
                        $leisure = $_POST["leisure_Checkbox"];
                    }

                    if (isset($_POST["adventure_Checkbox"])) {
                        $adventure = $_POST["adventure_Checkbox"];
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
                                    if ($_POST["pasigueno"] == "pasigueno") {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 20;
                                        $sum += $init_Value;
                                    }
                                    
                                    
                                    break;
                                case 'Flower Park':
                                    if ($_POST["pasigueno"] == "pasigueno") {
                                        $init_Value = 10;
                                        $sum += $init_Value;
                                    }else {
                                        $init_Value = 20;
                                        $sum += $init_Value;
                                    }
                                    break;
                                case 'Pasig Zoo':
                                    if ($_POST["pasigueno"] == "pasigueno") {
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
                                    if ($_POST["pasigueno"] == "pasigueno") {
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
                            echo "<li>" . $adventures . "</li>";
                        }
                        echo "</ol></div>";
                    }
                    echo "</div>";


                }else {
                    echo "wala kang binook par. Umay";
                }


                echo "<hr style=\"width:100%;text-align:left;margin-left:0;\">";
                if (isset($_POST["cards"])) {
                    echo "<h5 style=\"text-align:center; margin:0;\">Total payment is {$sum}₱ via {$_POST["cards"]}</h5>";
                } else {
                    echo "San ka mag babayad Idol?";
                }
                
            ?>
        
            <div id="btnCon">
                <button class="btnBooking" onclick="confirmation()">Confirm</button>
            </div> 
            
            <script>
                function confirmation() {
                    window.alert("Thanks you for Booking!");
                }
            </script>
                
        </div>
    </main>


    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>