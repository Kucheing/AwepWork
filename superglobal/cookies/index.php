<?php 
         //  name      value     time before being destroyed   path
setcookie('username', 'Faris', time()+3600, '/'); // 1 hour


?>

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
    <p>Setting cookies. <a href="page.php">Go to page.php</a></p>
</body>
</html>