<?php
$host = "localhost";
$dbname = "bible_study";
$username= "root" ;
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bible-Study</title>
</head>
<body>
<?php
    $sql = "SELECT * FROM registration;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['firstname'] . "<br>";
        }
    }
?>
</body>
</html>