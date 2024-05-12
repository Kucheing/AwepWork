<?php
$isLoggedIn = true;
$name = 'Faris';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Hard Coded login</title>
</head>

<body class="bg-gray-100">
    <header class="bg-green-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-black text-3xl font-bold">Hard Coded login</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-black rounded-lg shadow-md p-6">
            <?php if ($isLoggedIn && $name) : ?>
                <h1 class="text-white text-3x-1 font-semibold">Welcome <?= $name ?>.</h1>
            <?php elseif ($isLoggedIn) : ?>
                <h1 class="text-white text-3x-1 font-semibold">Welcome to my page</h1>
            <?php else : ?>
                <h1 class="text-white text-3x-1 font-semibold">Please log in.</h1>
            <?php endif ?>
        </div>
    </div>
</body>

</html>                                                                                 