<?php
echo ' Hello PHP '; // write in the php
print 'Hello from Print';
echo '<br>';
// print 'value 1', 'Value 2'; dont work because only on one string
echo 'value 1 ', 'Value 2';

//variables? it can be an object. Container to hold data, to be accessed.
$name = 'fareece';
$Name = 'faris';
$NAME = 'FARISSSS';
//$12welcuma3;// nono cant start with numbers

$header = 'Learn PHP with faris OKAY? cakap okay syamimi';
$title = 'My Darling PHP';

/*
naming converntions:
underscore $server_name
camel case $serverName
Pascal case $ServerName
lower case $servername 
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>
<body class="bg-green-100">
<header class="bg-rose-500 text-white p-4">
    <div class="container mx-auto">
         <h1 class="text-3x1 font-bold"><?= $header?></h1> <!-- php echo -->
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2x1 font-semibold mb-4">Welcome to AWEP</h2>
        <?= '<p>WD4305 Advance Web Programming</p>' ?>
    </div>
</div>
</body>
</html>