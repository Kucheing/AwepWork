<?php
/*
Array hold multiple data in diff data type
1. Versatile - not strict.
2. Ordered - has its own position. - index 0 START
3. easy access - 
*/


// METHOD 1
$names = ['one', 'two', 'three'];

//METHOD 2
$dwdt = array(1, 2, 3);
echo $names;

function printarray($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

printarray($names);

//Add element to array

$dwdt[3] = 326;
printarray($dwdt);

//change
$names[1] = 'five';
printarray($names);

//delete
unset($names[1]);
printarray($names);
//[0][2]

// [0][1]
$names = array_values($names);
printarray($names);
