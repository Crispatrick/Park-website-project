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
        <div id="receipt">
            <!-- Personal Information Section -->
            <h3 id="receipt_Header">Personal Information</h3>
            <section id="personal_InfoCon">
                <section class="personal_Info">
                    <div>First Name: </div>
                    <div>Last Name: </div>
                    <div>Email: </div>
                    <div>Contact: </div>
                    <div>Schedule: </div>
                    <div>Pax: </div>
                    <div>PasigueÃ±o: </div>
                    <div>Comments </div>
                </section>
                <section class="personal_Info">
                    <?php
                        echo "<div>" . $_POST["fname"] . "</div>";
                        echo "<div>" . $_POST["lname"] . "</div>";
                        echo "<div>" . ($_POST["email"] ?? "Not Available") . "</div>";
                        echo "<div>" . ($_POST["phone"] ?? "Not Available") . "</div>";
                        echo "<div>" . $_POST["schedule"] . "</div>";
                        echo "<div>" . $_POST["quantity"] . "</div>";
                        echo "<div>" . ($_POST["pasigueno"] ?? "Not Available") . "</div>";
                    ?>
                </section>
            </section>

            <hr>

            <!-- QR Code Section -->
            <div id="qrCodeSection" style="text-align:center; margin-top:20px;">
                <h3>Scan the QR Code to Pay</h3>
                <img src="./Resources/Images/qrCode.png" alt="QR Code" style="max-width:200px; margin-top:20px;">
            </div>

            <hr>

            <!-- User Image Section -->
            <div id="user-image" style="text-align:center; margin-top:20px;">
                <?php
                    // Display user image if it exists in the session or post data
                    if (isset($_SESSION["image_path"]) && !empty($_SESSION["image_path"])) {
                        echo "<img src='" . $_SESSION["image_path"] . "' alt='User Image' style='max-width:150px; margin-top:20px;'>";
                    } else {
                        echo "<p>No image uploaded</p>";
                    }
                ?>
            </div>

            <hr>

            <!-- Booking Details Section -->
            <?php
                // Assuming this code handles the booking display as before
                echo "<h3 id=\"receipt_Header\">Booked:</h3>";
                // Your booking details processing here
            ?>

            <div id="btnCon">