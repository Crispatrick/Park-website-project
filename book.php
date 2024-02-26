<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global_Palette.css">
    <link rel="stylesheet" href="css_Files\booking.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="receipt.php" method="post" target="_blank" id="main">
            <section id="form">
                <section id="user_Info" class="form_Sections">
                    <div>
                        <label for="fname">First Name:</label>
                        <input type="text" placeholder="Input your first name" id="fname" name="fname" autofocus required>
                    </div>
                    <div>
                        <label for="lname">Last Name:</label>
                        <input type="text" placeholder="Input your last name" id="lname" name="lname"required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" placeholder="example@example.com" id="email" name="email">
                    </div>
                    <div>
                        <label for="phone">Contact No</label>
                        <input type="tel" id="phone" name="phone" placeholder="Ex. 0917-123-45678" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
                    </div>
                    <div>
                        <label for="schedule">Schedule</label>
                        <input type="datetime-local" id="schedule" name="schedule">
                    </div>
                </section>

                <section id="booking_Attraction" class="form_Sections">
                    <div class="category">
                        <h3>Nature</h3>
                        <div class="Checkbox_Cont">
                            <div>
                                <input type="checkbox" name="nature_Checkbox[]" id="Butterfly_Pavillion" value="Butterfly Pavillion">
                                <label for="Butterfly_Pavillion">Butterfly Pavillion</label>
                            </div>
                            <div>
                                <input type="checkbox" name="nature_Checkbox[]" value="Flower Park" id="flower_Park">
                                <label for="flower_Park">Flower Park</label>
                            </div>
                            <div>
                                <input type="checkbox" name="nature_Checkbox[]" value="Pasig Zoo" id="pasig_Zoo">
                                <label for="pasig_Zoo">Pasig Zoo</label>
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <h3>Leisure</h3>    
                        <div class="Checkbox_Cont">
                            <div>
                                <input type="checkbox" name="leisure_Checkbox[]" value="Rapid Rides" id="Rapid_Rides">
                                <label for="Rapid_Rides">Rapid Rides</label> <br>
                                <input type="checkbox" name="leisure_Checkbox[]" value="Waterpark Pavillion" id="Water_Park">
                                <label for="Water_Park">Waterpark Pavillion</label> 
                            </div>
                            <div>
                                <input type="checkbox" name="leisure_Checkbox[]" value="Amphitheater" id="Amphitheater">
                                <label for="Amphitheater">Amphitheater</label> <br>
                                <input type="checkbox" name="leisure_Checkbox[]" value="Picnic Ground" id="Picnic_Ground">
                                <label for="Picnic_Ground">Picnic Ground</label> <br>
                                <input type="checkbox" name="leisure_Checkbox[]" value="Promenade Area" id="Promenade_Area">
                                <label for="Promenade_Area">Promenade Area</label> 
                            </div>
                            <div>
                                <input type="checkbox" name="leisure_Checkbox[]" value="Mini Train" id="Mini_Train">
                                <label for="Mini_Train">Mini Train</label> <br>
                                <input type="checkbox" name="leisure_Checkbox[]" value="Boat Rental" id="Boat_Rental">
                                <label for="Boat_Rental">Boat Rental</label> 
                            </div>
                        </div>
                    </div>
                    <div class="category">
                        <h3>Adventure</h3>
                        <div class="Checkbox_Cont">
                            <div>
                                <input type="checkbox" name="adventure_Checkbox[]" value="MAZE Garden" id="MAZE_Garden">
                                <label for="MAZE_Garden">MAZE Garden</label>
                            </div>
                            <div>
                                <input type="checkbox" name="adventure_Checkbox[]" value="Zip Line" id="Zip_Line">
                                <label for="Zip_Line">Zip Line</label>
                            </div>
                            <div>
                                <input type="checkbox" name="adventure_Checkbox[]" value="Obstacles" id="Obstacles">
                                <label for="Obstacles">Obstacles</label>
                            </div>
                        </div>
                    </div>

                    <div class="category">
                        <h3>Payment Method</h3>
                        <div class="Checkbox_Cont">
                            <div>
                                <input type="radio" name="cards[]" value="GCash" id="Gcash">
                                <label for="Gcash">Gcash</label>
                            </div>
                            <div>
                                <input type="radio" name="cards[]" value="Paypal" id="Paypal">
                                <label for="Paypal">Paypal</label>
                            </div>
                            <div>
                                <input type="radio" name="cards[]" value="Paymaya" id="Paymaya">
                                <label for="Paymaya">Paymaya</label>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <div id="buttons">
                <input type="button" value="CANCEL">
                <input type="submit" value="CONFIRM" name="confirm">
            </div>
        </form>

    </main>

</body>
</html>