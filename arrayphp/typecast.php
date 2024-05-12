<?php
$num1 = 5; //int
$num2 = 10; //int
$num3 = '20'; //string
$fruit = 'apple';
$bool1 = true;
$bool2 = false;

$result = $num1 + $num2; //15

// casting - converts one data type to another.
//1. implicit typecasting - PHP automatically convert
$result = $num1 + $num3; //25? string -> int
$result = $num2 . $num3; // 1020 int -> string
// $result = $fruit + $num1; // error
$result = $num1 + $bool1; //6 -> true = 1
$result = $num1 + $bool2; //5 -> false = 0



//2. explicit typecasting - Programmer convert it
$result = (string)$num1; //int --> string
var_dump($result);
$result = (int)$num3; //string --> int
$result = (bool)$num2; //int --> boolean TRUE.

//----------------Arithmatic Operations-------------
$number1 = 24;
$number2 = 6;

$output = '$number1 + $number2 = ' . $number1 + $number2;
$output = '$number1 - $number2 = ' . $number1 - $number2;
$output = '$number1 * $number2 = ' . $number1 * $number2;
$output = '$number1 / $number2 = ' . $number1 / $number2;
$output = '$number1 % $number2 = ' . $number1 % $number2;

$number3 = 69;
$number3 = 8 + $number3; //77
$number3 += 8; //77

//BUILD IN FUNCTION
//1.rand()
$output = rand();
$output = getrandmax();
$output = rand(1, 10);

//2.round() -->nearest 10th
$output = round(4.8); //5
$output = round(4.1); //4

//3.floor() 
$output = floor(4.6); //taking the whole number only

//4.sqrt() 
$num = 64;
$output = sqrt($num);

//5.pi() 
$output = pi();

// 6. max() or min()
$output = max(1, 50, 7, 65); // 65 takes the highest 
$output = min(323, 521, 7, 21); // 7 takes the lowest number

//7. currency - 1000 --> 1,000.00
$bnd = 8321432431.21;
//e.g. 1.000,00
$output = number_format($bnd, 2, '.', ','); //8,321,432,431.21





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
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">
      <!-- Output -->
      <?= $result ?>
      <p class="text-x1"><?= $output ?></p>
      <p class="text-x1"><?= $number3 ?></p>
    </div>
  </div>
</body>

</html>