<?php
//int
$age = 35;
var_dump($age);


//string
$name = 'Faris'; // single quote
$name2 = "Farrissss uieee";
var_dump($name);

//boolean
$isSleeping = true;
var_dump($isSleeping);

//float
$rating = 4.5;
var_dump($rating);

//array
$friends = ['a', 'b', 'c'];
var_dump($friends);

//object
//created using a class
// $group = new wdtClass{};
// var_dump($group);


//resources
$file = fopen('sample.txt', 'r');

// -------------string concatenation------------
$firstName = 'faris';
$lastName = 'Zulkiffli';

$fullname = $firstName . ' ' . $lastName;
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
      <?=
      //  'Hello, my name is '.$fullName;
      //  "Hello, my name is {$fullName}.";
      'Hello, my name is \'faris\'';

      ?>
    </div>
  </div>
  <a href="typecast.php" a>
</body>

</html>