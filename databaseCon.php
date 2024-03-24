<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'rave';


// Set DSN
$dsn = 'mysql:host='. $host .';dbname='. $dbName;


try {
// Create a PDO instance
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script type = 'text/javascript'>
        alert(\"ayaw mag connect par.\")
        </script>";
    die();
}


// $fname = 'john';
// $lname = 'titor';
// $email = 'john@gmail.com';

// $query = 'INSERT INTO bookingInfo(fname, lname, email)
//                 VALUES(:fname, :lname, :email )';
//                 // :contact, 
//                 // :schedule, :pax, :pasigueno, :comments, :payment
// $queryPrep = $pdo->prepare($query);
// $queryPrep->execute(['fname' => $fname, 
//                     'lname' => $lname, 
//                     'email' => $email
//                     // 'contact' => strval($_SESSION["phone"]),
//                     // 'schedule' =>  $_SESSION["schedule"],
//                     // 'pax' => (int)$_POST["quantity"],
//                     // 'pasigueno' => $_SESSION["pasigueno"],
//                     // 'comments' => $_SESSION["comment"],
//                     // 'payments' => $_SESSION["payment"]
//                 ]);
// // echo 'Post Added';


?>