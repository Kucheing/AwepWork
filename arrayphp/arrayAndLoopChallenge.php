<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loop</title>
    <style>
    </style>
</head>
<!-- # Array & Loop Challenges

## Challenge 1: Multiplication Table

Create a multiplication table using a nested `for` loop. The table should look like this: -->

<body>
    <div class="grid-container">
        <?php for ($i = 1; $i < 11; $i++) : ?>
            <?php for ($s = 1; $s < 11; $s++) : ?>
                <div class="grid-item">
                    <?= $i . ' x ' . $s . ' = ' . $i * $s ?><br />
                </div>
            <?php endfor; ?>
        <?php endfor; ?>
    </div>


    <!-- ```
1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
...
10 x 10 = 100
```

### Hints

- The outer and inner loops should both start at 1, not 0.
- The outer and inner loop should have a different variable name. (Commonly `$i` and `$j` are used.)
- Multiply the current number from the outer loop ($i) by the current number from the inner loop ($j). Then you want to echo the equation and the result.
- Add a line break after each equation.


## Challenge 2: Get The Sum Of An Array

In the last challenge video, I had you get the sum of an array by manually adding the numbers together. In this challenge, I want you to use a `foreach` loop. You can also do this with a `for` loop for extra credit. -->
    <?php
    echo " <br>";
    echo "[1, 2, 3, 4, 5, 6, 7, 8, 9, 10] <br>";
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


    $sum = 0;
    foreach ($numbers as $singles) {
        $sum += $singles;
    }
    echo "The sum of the numbers in the array is {$sum}\n <br>";
    ?>


    <!--

### Hints

- Use the append assignment operator (+=) to add each number to a variable. Then echo the variable after the loop.


## Challenge 3: Student Average Grade

1. Create a multidimensional array called $students that contains associative arrays for each student.
2. Each student's associative array should have keys for 'name' and 'grades'.
3. The 'grades' key should have an array of numeric grades for that student.
4. Use a foreach loop to iterate over each student in the $students array.
5. Calculate the average grade for each student and display their name and average grade.

### Hints

- You can use the `array_sum()` function to get the sum of an array and the `count()` function to get the number of items in an array. Then divide the sum by the count to get the average. -->

    <?php
    echo " <br>";
    $students = [
        ['name' => 'Faris', 'grades' => [90, 80, 85]],
        ['name' => 'Syamimi', 'grades' => [90, 90, 90]],
        ['name' => 'sum ting wong', 'grades' => [80, 70, 75]],
        ['name' => 'Fatin', 'grades' => [70, 60, 65]],
        ['name' => 'Nur', 'grades' => [60, 50, 55]]
    ];

    // this is for multiple inside the array

    // foreach ($students as $student) {
    //     $average = array_sum($student['grades']) / count($student['grades']);
    //     echo "{$student['name']} has an average grade of {$average}.\n";
    // }

    // this is for 1 like person in the array


    foreach ($students as $s)
        $name = $s['name'];
    $grades = $s['grades'];

    echo " <br>";

    $average = array_sum($grades) / count($grades);
    echo "$name:  average grade = $average <br>";

    ?>
    <!--

</body>

</html>