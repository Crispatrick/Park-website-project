<?php
if ($_POST["confirm"]) {
    echo $_POST["fname"] . "<br>";
    echo $_POST["lname"] . "<br>";
    echo $_POST["email"] . "<br>";
    echo $_POST["schedule"];
} else {
    echo "di gumagana par";
}

?>