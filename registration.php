<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$type = $_POST["paymenttype"];

echo $type;
$host = "localhost";
$dbname = "bible_study";
$username= "root" ;
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);
if (mysqli_connect_errno()) {
    die("connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO registration (firstname,lastname,email,phone,paymenttype) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt,"ssssi", $fname,$lname,$email,$phone,$type);
if (mysqli_stmt_execute($stmt)) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <title>Thank You!</title>
    </head>
    <body>
        <div class='container' style='display:grid;place-items:center;'>
            <span>
                Thank you very much for registering.  
            </span>
            <a href='index.html'>Return to main page</a>
        </div>
    </body>
    </html>";
}
else {
    echo "Record has NOT been saved";
}
?>