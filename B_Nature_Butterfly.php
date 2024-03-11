<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_Files\B_Nature.css">
    <link rel="stylesheet" href="css_Files\accordion.css">
    
    <title>Document</title>
</head>
<body>

<!-- header -->
<?php
    include("html_Files\\header.html");
?>
    <div class="blur-overlay"></div>

    <section id="main">
        <!-- booking informations - needs to be toggled -->
        <form action="receipt.php" method="post" target="_blank"   >
            <section id="form">
                <section id="user_Info" class="form_Sections">
                    <div class="inputs">
                        <label for="fname">First Name:</label>
                        <input class="types_Size types_Decor"  type="text" placeholder="Input your first name" id="fname" name="fname" autofocus required>
                    </div>
                    <div class="inputs">
                        <label for="lname">Last Name:</label>
                        <input class="types_Size types_Decor"  type="text" placeholder="Input your last name" id="lname" name="lname"required>
                    </div>
                    <div class="inputs">
                        <label for="email">Email</label>
                        <input class="types_Size types_Decor"  type="email" placeholder="example@example.com" id="email" name="email">
                    </div>
                    <div class="inputs">
                        <label for="phone">Contact No</label>
                        <input class="types_Size types_Decor"  type="tel" id="phone" name="phone" placeholder="Ex. 0917-123-45678" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
                    </div>
        
                    <div class="inputs">
                        <label for="schedule">Schedule</label>
                        <input type="datetime-local" id="schedule" name="schedule" required class="types_Size types_Decor">
                    </div>

                    <div class="inputs">
                        <label for="pasig">Pasigueño?</label>
                        <div id="pasigueno" class="types_Size types_Decor" style="background-color:rgba(255, 255, 255, 0);">
                            <div>
                                <input type="radio" id="yes" name="pasigueno" value="You're a Pasigueño!">
                                <label for="yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="no" name="pasigueno" value="You're not a Pasigueño!">
                                <label for="no">No</label>
                            </div>
                        </div>
                    </div>




                    <hr style="width:100%;text-align:left;margin-left:0; background-color:white;">




                    
                    <div class="inputs">
                        <label for="comment">Comments:</label>
                    </div>
                    <textarea class="types_Decor" id="comment" name="comment" rows="6" cols="50" placeholder="Leave a message?"></textarea>

                    
                    <div class="inputs">
                        <div>Payment Method</div>
                        <div id="pasigueno" class="types_Size types_Decor" style="background-color:rgba(255, 255, 255, 0);">
                            <div>
                                <input type="radio" name="cards" value="GCash" id="Gcash">
                                <label for="Gcash">Gcash</label>
                            </div>
                            <div>
                                <input type="radio" name="cards" value="Paypal" id="Paypal">
                                <label for="Paypal">Paypal</label>
                            </div>
                            <div>
                                <input type="radio" name="cards" value="Paymaya" id="Paymaya">
                                <label for="Paymaya">Paymaya</label>
                            </div>
                        </div>
                    </div>

        
                    <div id="buttons">
                        <input style="letter-spacing: 0px; padding: 5px;" class="btnBooking" type="button" value="CANCEL" onclick="togglelogin()">
                        <input style="letter-spacing: 0px; padding: 5px;" class="btnBooking" type="submit" value="CONFIRM" name="confirm">
                    </div>
                </section>
            </section>
        </form>
        <section id="info">
                <button class="accordion">Butterfly Pavillion</button>
                <div class="panel">
                    <ul>
                        <li>Pasigueños (one-entry) - 10.00Php</li>
                        <li>Non-Pasigueños (one-entry) - 20.00Php</li>
                    </ul>
                </div>
                <script src="js_Files\accordion.js"></script>
        </section>
    </section>


<!-- footer -->
<?php
    include("html_Files\\footer.html");
?>

</body>
</html>