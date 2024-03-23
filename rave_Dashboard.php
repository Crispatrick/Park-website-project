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

    <br><br>

    <main>
        <section id="statistic_Header">
            <form action="" id="stats">
                <div class="statsBox">
                    <label for="date">Date</label>
                    <input type="datetime-local" name="date" id="date">
                </div>


                <div class="statsBox">
                    <label for="attraction">Attraction</label>
                        <select id="attraction" name="attraction" required>
                            <option value="Select" disabled selected> -Select- </option>
                            <option value="Nature"> Nature </option>
                            <option value="Leisure"> Leisure </option>
                            <option value="Adventure"> Adventure </option>
                            <option value="Butterfly Pavillion"> Butterfly Pavillion </option>
                            <option value="Flower Park"> Flower Park </option>
                            <option value="Pasig Zoo"> Pasig Zoo </option>
                            <option value="Rapid Rides"> Rapid Rides </option>
                            <option value="Waterpark Pavillion"> Waterpark Pavillion </option>
                            <option value="Amphitheater"> Amphitheater </option>
                            <option value="Picnic Ground"> Picnic Ground </option>
                            <option value="Mini Train"> Mini Train </option>
                            <option value="Boat Rental"> Boat Rental </option>
                            <option value="Maze Garden"> Maze Garden </option>
                            <option value="Zip Line"> Zip Line </option>
                            <option value="Obstacles Courses"> Obstacles Courses </option>
                        </select>
                </div>
            

                
                <div class="statsBox">
                    <label for="pasigueno">Pasig Resident</label>
                    <select id="pasigueno" name="pasigueno" required>
                        <option value="select" disabled> -Select- </option>
                        <option value="yes"> Yes </option>
                        <option value="no"> No </option>
                    </select>
            
                </div>           
            </form>
        </section>


    
        <section id="stats_Number">
            <div class="stats_Num_Children">
                <div>Total Bookings</div>
                <div>
                    <!-- dito yung query ng database -->
                    10
                </div>
            </div>
            <div class="stats_Num_Children">
                <div>Total Services</div>
                <div>
                    <!-- dito yung query ng database -->
                    12
                </div>
            </div>

            <div class="stats_Num_Children">
                <div>Total Pasig Residents</div>
                <div>
                    <!-- dito yung query ng database -->
                    23
                </div>
            </div>
            
        </section>


    </main>


    <?php
        include("html_Files\\footer.html");
    ?>

</body>
</html>