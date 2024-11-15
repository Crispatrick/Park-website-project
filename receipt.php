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
                    <div>Pasigueño: </div>
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
                    /* this is for storing the image */
                    // Directory where the uploaded images will be saved
                    $target_dir = "images/"; // Ensure this folder exists and has write permissions
                    $original_file_name = basename($_FILES["fileToUpload"]["name"]);
                    $imageFileType = strtolower(pathinfo($original_file_name, PATHINFO_EXTENSION));

                    // Initialize the target file path
                    $target_file = $target_dir . $original_file_name;
                    $uploadOk = 1;

                    // Check if the form was submitted
                    // Check if the uploaded file is an actual image
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check !== false) {
                        /* echo "File is an image - " . $check["mime"] . "."; */
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }

                    // Check for existing files and append a number if necessary
                    $counter = 1;
                    while (file_exists($target_file)) {
                        // Create a new filename with an incremented number
                        $target_file = $target_dir . pathinfo($original_file_name, PATHINFO_FILENAME) . "($counter)." . $imageFileType;
                        $counter++;
                    }

                    // Check file size (optional)
                    if ($_FILES["fileToUpload"]["size"] > 50000000) { // Limit size to 500KB
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }

                    // Check if everything is ok to upload
                    if ($uploadOk == 1) {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            echo "<img src='" . $target_file . "' alt='User Image' style='max-width:20rem;'> <br>";
                            echo "Your Valid ID named: " . htmlspecialchars(basename($target_file)) . " has been uploaded.";
                            /* echo "<br>" . $target_file . "<br>"; */
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    } else {
                        echo "Your file was not uploaded due to errors.";
                    }




             /*        include("database.php");
                    // Prepare and execute insert statement
                    $stmt = $conn->prepare("INSERT INTO bookinginfo (imgDir) VALUES (?)");
                    $stmt->bind_param("s",  $target_file);
                    $stmt->execute(); */





                    /* kay tine to, cocomment ko after gumana nung akin */
                    // Display user image if it exists in the session or post data
/*                     if (isset($_SESSION["image_path"]) && !empty($_SESSION["image_path"])) { */

/*                     } else {
                        echo "<p>No image uploaded</p>";
                    } */
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
                <button class="btnBooking" onClick="window.location.href='index.php'">Confirm</button>
            </div> 

        </div>
    </main>

    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>