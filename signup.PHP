<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirmpassword = $_POST['Confirm_Password'];

    if(!empty($user_name) && !empty($email) && !empty($password) && !empty($confirmpassword) && !is_numeric($user_name))
    {
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,email,password,confirmpassword) values ('$user_id','$user_name','$email','$password','$confirmpassword')";          
        mysqli_query($con,$query);
    }
    else
    {
        echo "Please enter some valid information!";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARE SLOTS</title>
     <LINK  rel="icon" href="kare_logo-removebg-preview.png" type="image/X - icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/14c0387f46.js" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
<marquee>KALASALINGAM UNIVERSITY,KRISHNAN KOIL,SRIVILLIPUTHUR,VIRUDHUNAGAR,626126</marquee>
    <div class="form-box">
        <h1>Sign up</h1>
        
        <form method = "post">
            <div class="input-group">
                <div class="input-field">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Name" name = "Name"><br><br>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name = "Email"><br><br>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name = "Password"><br><br>
                </div>
                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name = "Confirm_Password"><br><br>
                </div>
                <input class="button" type="submit" value="Signup"><br><br>

                <a class="button" href="login.php" id="button">Click to login</a><br><br>
                
            </div>
        </form>
    </div>

</div>
    
</body>
</html>