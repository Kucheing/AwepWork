<?php 
        //  name      value  time before being destroyed   path
setcookie('username', '', time()+3600, '/')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>

    <style>
        body{
            background-color: black;
        }
        h1,p{
            color: white;
            }
    </style>
    
</head>
<body>
    <p>Your cookies has been destroyed. <a href="page.php">Go back</a></p>
</body>
</html>