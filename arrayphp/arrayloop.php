<?php
$names = ['faris', 'syamimi', 'joe doh', 'fatin', 'nur'];
$user = [
    ['name' => 'faris', 'email' => 'faris@gmail.com'],
    ['name' => 'syamimi', 'email' => 'syamimi@gmail.com'],
    ['name' => 'joe doh', 'email' => 'joedoh@gmail.com'],
    ['name' => 'fatin', 'email' => 'fatin@gmail.com'],
]; //Associative Array

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

            <h1 class="text-3xl font-semibold">Looping thru Arrays</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-x1 font-semibold mb-4">Using FOR Loop</h3>
            <ul class="mb-6">
                <?php for ($i = 0; $i < count($names); $i++) : ?>
                    <li><?= $names[$i] ?></li> <!--print the names index -->
                <?php endfor; ?>
            </ul>

            <h3 class="text-x1 font-semibold mb-4">Using FOREACH Loop</h3>
            <ul class="mb-6">
                <?php foreach ($names as $org) : ?> <!--$org is item/value -->
                    <li><?= $org ?></li> <!--print the names index -->
                <?php endforeach; ?>
            </ul>

            <h3 class="text-x1 font-semibold mb-4">Using FOREACH INDEX Loop</h3>
            <ul class="mb-6">
                <!-- 0 : Faris 1: Syamimi 2: Joe Doh 3: Fatin 4: Nur -->
                <?php foreach ($names as $index => $namaiwa) : ?>
                    <li><?= $index . ':' . $namaiwa ?></li>
                <?php endforeach; ?>
            </ul>

            <h3 class="text-x1 font-semibold mb-4">Using FOREACH ASSOCIATION Loop</h3>
            <ul class="mb-6">
                <?php foreach ($user as $a) : ?>
                    <li><?= $a['name'] . ' ' . $a['email'] ?></li>
                <?php endforeach; ?>
            </ul>

            <h3 class="text-x1 font-semibold mb-4">Keys and Values</h3>
            <ul class="mb-6"></ul>
            <?php foreach ($user as $s) : ?>
                <?php foreach ($s as $key => $value) : ?>
                    <li>
                        <?= $key . ' : ' . $value; ?>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>