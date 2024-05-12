<?php
$a = 'paris';
// $output = '$a';  '' single cannot call variable
$output = "Hello, $a"; // double can call the variable

//BUILT IN FUNCTION
//1. String length
$output = strlen($a); //5

//2. word count 
$output = str_word_count('Hello,my name is Pawis yang gigit syamimi');

//3. position of word.
$b = "I like to move it, MOVE IT - king julian";
$output = strpos($b, "it");

//4. getting te specific character.
$output = $b[5]; //e

// 5. substring 
$output = substr($b, 18, 8); // 18: start position - 8: length

//6. string replace.
$output = str_replace('like', 'love', $b);

//7. lower case and upper case
$output = strtolower($b);
$output = strtoupper($b);
$output = ucwords($b);

//-----------------------------Date and Time-------------------
/*
'Y' - year
'M' - month
'D' - date
'd' - day
'l' - full day name
'h' - hour
'i' - minute
's' - second
'a' - am/pm
*/

$output = date('Y'); //2024

//epoch time - milisecond counted from 1970 1st of january
$output = date('Y', 936345600); // 1999
$output = date('Y', strtotime('2000'));

//Put all together.
$output = date('d-m-Y h:i:s a') // time in utc or gmt




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-emerald-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Output -->

            <p class="text-x1"><?= $output ?></p>


        </div>
    </div>
</body>

</html>