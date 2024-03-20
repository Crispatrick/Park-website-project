<?php
//starts data sharing
session_start();

class bookingInfo{
    //data variables initialize
    public $Fname;
    public $Lname;
    public $Email;
    public $Contact;
    public $Comments;

    function __construct()
    {
        //initialize values from session to the variables when function is called
        $this->Fname = $_POST["fname"];
        $this->Lname = $_POST["lname"];
        $this->Email = $_POST["email"];
        $this->Contact = $_POST["phone"];
        $this->Comments = $_POST["comment"];
    }

    function get_name(){
        return $this->Fname . " " . $this->Lname;
    }
    function get_contacts(){
        return 
            "Email - " . $this->Email . "<br>" . 
            "Phone - " . $this->Contact;
    }

    function get_comments(){
        return 
            $this->Comments;
    }

}

$_SESSION["message"] = new bookingInfo();

?>

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
    <!-- <div class="blur-overlay"></div> -->
        <div id="receipt">
            <h3 id="receipt_Header" style="text-align: center;">OOP Format for message</h3> <br>
            <section id="personal_InfoCon">
                <section class="personal_Info">
                    <div>Name: </div>
                    <!-- <div>Last Name: </div> -->
                    <!-- <div>Email: </div> -->
                    <div>Contacts: </div>
                    <!-- <br> -->
                    <div>Booking Details: </div>
                    <!-- <br><br><br> -->
                    <div>Comments:</div>
                    <!-- <br> -->
                    <!-- <div>Schedule: </div>
                    <div>Pax: </div>
                    <div>Pasigueño: </div>
                    <div>Comments </div> -->
                </section>
                <section class="personal_Info">
                    <?php
                        echo "<div>" . $_SESSION["message"]->get_name() . "</div>";
                        echo "<div>" . $_SESSION["message"]->get_contacts() . "</div>";
                        // echo "<div>" . $_SESSION["booked"]->get_bookingdetail() . "</div>";
                    ?>
                    
                </section>


            </section>
            
            <?php
                echo "<div style=\"margin-right:100px; margin-left:100px;  text-align:center; background-color:var(--dark_Blue); padding:30px;\">" . $_SESSION["message"]->get_comments() . "</div>";

                // echo "<div style=\"display:flex; justify-content:center;\">";
                //     echo "<div>";
                // if (!empty($_SESSION["booked"]->get_nature())) {
                //     echo "<div>Nature</div>";
                //     echo "<ol>";
                //     foreach ($_SESSION["booked"]->get_nature() as $nature) {
                //         echo"<li>{$nature}</li>";
                //     }
                //     echo "</ol>";
                // }
                // if (!empty($_SESSION["booked"]->get_adventure())) {
                //     echo "<div>Adventure</div>";
                //     echo "<ol>";
                //     foreach ($_SESSION["booked"]->get_adventure() as $nature) {
                //         echo"<li>{$nature}</li>";
                //     }
                //     echo "</ol>";
                // }
                // if (!empty($_SESSION["booked"]->get_leisure())) {
                //     echo "<div>Leisure</div>";
                //     echo "<ol>";
                //     foreach ($_SESSION["booked"]->get_leisure() as $nature) {
                //         echo"<li>{$nature}</li>";
                //     }
                //     echo "</ol>";
                // }
                //     echo "</div>";
                // echo "</div>";




                // echo "<h5 style=\"text-align:center; margin:0;\">Total payment is {$_SESSION["booked"]->get_sum()}₱ ({$_SESSION["booked"]->get_originalValue()}₱ x {$_SESSION["booked"]->get_pax()} Pax) via {$_SESSION["booked"]->get_Payment()}</h5>";
            ?>








                
        </div>
    </main>


    <?php
        include("html_Files\\footer.html");
    ?>
</body>
</html>