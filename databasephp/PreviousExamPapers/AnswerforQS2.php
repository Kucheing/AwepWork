<?php
$name = 'John';
$age = 18;
$email = 'john@student.com';

if($age<18){
echo "Welcome $name, you are accepted.";
}else {
echo "Sorry $name, you are not eligible.";
 }

if(empty($email)){
echo "Email is required.";
}
else{
echo "Your email is $email";
}

?>
<br>
<br>
<?php

//Question 2.a)
$myArray = array(10, 20, 30, 40);

// Use array_slice to get a new array with the values 20 and 30
$newArray = array_slice($myArray, 1, 2);

// Now $newArray contains the values 20 and 30
print_r($newArray);

//Question 2.b)
// There is a total of four (4) errors found in this given PHP code. The expected output should display the message echoed.

// i. List the line numbers that have errors.

/*
line 2
line 4 correct
line 8 correct
line 16 correct*/

// ii. Explain on each line with a theoretical reason what causes the error.

/*
line 2 - It should be single quotation not double on John
line 4 - There is a missing double quotation here
line 8 - We are missing its closing } bracket
line 16 - The name $emai. is wrong here it should be $email */


// iii. Rewrite the corrected complete code for the current line. The corrected
//      code must blend in well with the rest of the source code.

/*
line 2 - 
line 4 - $email = "john@student.com";
line 8 - } else {
line 16 -  echo "Your email is $email.";
*/

//Question 2 part2 .a)
?>
<br>
<br>
<?php
// Check if 'amount' is set and is not empty
if (isset($_POST['amount']) && $_POST['amount'] !== '') {
    // Retrieve the amount from the POST data
    $amount = $_POST['amount'];


    // Check that the amount owing is between 1cent and 99cents, otherwise
    // print a message “Invalid amount entered”.

    // Check if the amount is between 1 and 99
    if ($amount < 1 || $amount > 99) {
        echo "Invalid amount entered";
    } else {
        // Calculate the change
        $change = 100 - $amount;


        // Calculate the number of each coin
        $coins = array(
            '50cents' => intdiv($change, 50),
            '20cents' => intdiv($change % 50, 20),
            '10cents' => intdiv($change % 50 % 20, 10),
            '5cents' => intdiv($change % 50 % 20 % 10, 5),
            '1cent' => $change % 50 % 20 % 10 % 5
        );

        // Display the number of each coin
        foreach ($coins as $coin => $num) {
            echo "$coin: $num | ";
        }

        // Display the total change amount
        echo "Total change is $change cents.";
    }
}
?>

<!-- Start of HTML document -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="amount" id="amount">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>