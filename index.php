<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kare Slots</title>
    <LINK  rel="icon" href="kare_logo-removebg-preview.png" type="image/X - icon">
</head>
<body>
    <a href="logout.php"> LOGOUT</a>
    <h1> This is the index page</h1>
    HELLO,<?php echo $user_data['user_name'];?>
</body>
</html>