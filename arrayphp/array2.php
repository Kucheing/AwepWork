<?php
$ids = [10, 26, 14, 5, 8];
$users = ['user1', 'user2', 'user3'];

//count the element
$output = count($ids); //5

//sort array
sort($ids);

//reverse array
rsort($ids);
rsort($users);

//add on the element
array_push($ids, 100);
array_push($users, 'user4');

//take out the last element.
array_pop($ids);
array_pop($users);

//take out the first element.
array_shift($ids);
array_shift($users);

//masukkan dari depan
array_unshift($ids, 80);
array_unshift($users, 'user5');

//splice
array_splice($ids, 1, 1, 'New ID');
array_splice($users, 1, 2, 'New User');

//search
$output = 'User 5 is at ' . array_search('user5', $users);

//exist
$output = 'New ID Exists: ' . in_array('New ID', $ids);




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
    <header class="bg-amber-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Output -->

            <p class="text-x1"><?= $output ?></p>
            <h2 class="text-xl font-bold my-4">ID ARRAY:</h2>
            <p>
            <pre><?php print_r($ids); ?></pre>

            <p class="text-x1"><?= $output ?></p>
            <h2 class="text-xl font-bold my-4">Users ARRAY:</h2>
            <p>
            <pre><?php print_r($users); ?></pre>
            </p>
            </p>
        </div>
    </div>
</body>



</html>