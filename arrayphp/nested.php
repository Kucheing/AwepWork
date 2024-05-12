<?php
// for loop

// for ($i = 0; $i < 5; $i++) {
//     for ($s = 0; $s < 5; $s++) {
//         echo $i . '-' . $s . '<br>';
//     }
// }

//while loop

// $i = 0;
// while ($i < 10) {
//     $i = 0;
//     while ($s < 5) {
//         echo $i . '-' . $s . '<br>';
//         $s++;
//     }
//     $i++;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 50px);
            /*5 cols, 50px width*/
            grid-gap: 5px;
            padding: 5px;
            background-color: blue;
        }

        .grid-item {
            width: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>

<body>
    <div class="grid-container">
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <?php for ($s = 0; $s < 5; $s++) : ?>
                <div class="grid-item">
                    <?= $i . 'x' . $s ?>
                </div>
            <?php endfor; ?>
        <?php endfor; ?>
    </div>
</body>

</html>