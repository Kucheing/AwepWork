<?php
// Check if 'number' is set and is not empty
if (isset($_POST['number']) && $_POST['number'] !== '') {
    // Retrieve the number from the POST data
    $num = $_POST['number'];

    // Check if the number is divisible by 2 (i.e., it's even)
    if ($num % 2 == 0) {
        // If the number is even, print this message
        echo "The number is even";
    } else {
        // If the number is not even (i.e., it's odd), print this message
        echo "The number is odd";
    }
}
?>

<!-- Start of HTML document -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character encoding for the document -->
    <meta charset="UTF-8">
    <!-- Set viewport for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Set title of the document -->
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="number" id="number">
        <input type="submit" value="Check">
    </form>
</body>
</html>
<!--
Question 1.a)

i. List the line numbers that have errors.

Line 2
Line 3
Line 5
Line 7

--------------------------------------------------------------------------

ii. Explain on each line with a theoretical reason what causes the error.

Line 2: In PHP, function parameters must start with a dollar sign ($).
Line 3: The area of a square is calculated by squaring the length, not by adding the length to itself. so should be * not +
Line 5: The variable is named $radius, but it should be $length because we're dealing with a square, not a circle. and radius is not used here.
Line 7: it should be using . for concatenation not +


-------------------------------------------------------------------------

iii. Rewrite the corrected complete code for the current line. The corrected
code must blend in well with the rest of the source code.

// Corrected function parameter and calculation
function calculateArea($length) {
    return $length * $length;
}

// Corrected variable name instead of radius its length
$length = 4;

// Corrected string concatenation operator
echo "The area of the square is: " . $area;
?>
-->