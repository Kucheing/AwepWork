# Array Challenges

Now I want you to do some basic challenges on your own. These are very easy and we only deal with stuff that we have worked with so far. For instance, we have not covered loops, so I don't expect you to use them. You don't have to use the HTML template. You can just use `echo` to print out the results.

## Challenge 1: Sum of an array

Create an array of numbers and get the sum without using array_sum(). Then print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be `The sum of the 5 numbers is: 15`.

### Hints

- You can use `count()` to get the amount of numbers in the array.
- We have not gone over loops yet so I don't expect you to use them. You can just add the numbers together manually.

-----------------------------------------------------------------------

## Challenge 2: Colors array

- 1. Reverse the `$colors` array
- 2. Add 'purple' and 'orange' to the end of the array
- 3. Add the color 'pink' as the second color in the array.
- 4. Remove the last element of the array

You should end up with the following array:

```php
['yellow', 'pink', 'green', 'blue', 'red', 'purple'];
```

### Hints

- You can use `array_reverse()` to reverse the array.
- You can use `array_merge()` to add the colors to the end of the array.
- You can use `array_splice()` to add the color 'pink' as the second color in the array.
- You can use `array_pop()` to remove the last element of the array.

-----------------------------------------------------------------------

## Challenge 3: Job Listing Array

1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
3. Print out the job_title of the second job listing in the array.
4. Print out the first skill of the third job listing in the array.

<?php
// Challenge one
/*## Challenge 1: Sum of an array

Create an array of numbers and get the sum without using array_sum(). Then print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be `The sum of the 5 numbers is: 15`.

### Hints

- You can use `count()` to get the amount of numbers in the array.
- We have not gone over loops yet so I don't expect you to use them. You can just add the numbers together manually.

*/
$numbers = [1, 2, 3, 4, 5];

$output = 'The sum of the ' . count($numbers) . ' numbers is: ' . $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] + $numbers[4];



/*
## Challenge 2: Colors array

- 1. Reverse the `$colors` array
- 2. Add 'purple' and 'orange' to the end of the array
- 3. Add the color 'pink' as the second color in the array.
- 4. Remove the last element of the array

You should end up with the following array:

```php
['yellow', 'pink', 'green', 'blue', 'red', 'purple'];
```

### Hints

- You can use `array_reverse()` to reverse the array.
- You can use `array_merge()` to add the colors to the end of the array.
- You can use `array_splice()` to add the color 'pink' as the second color in the array.
- You can use `array_pop()` to remove the last element of the array.
*/

$colors = ['red', 'blue', 'green', 'yellow'];

$colors = array_reverse($colors);
$colors = array_merge($colors, ['purple', 'orange']);
array_splice($colors, 1, 0, 'pink');
array_pop($colors);

echo '<pre>';
print_r($colors);
echo '</pre>';

/*
## Challenge 3: Job Listing Array

1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
3. Print out the job_title of the second job listing in the array.
4. Print out the first skill of the third job listing in the array.
*/

$listings = [
    [
        'id' => 1,
        'job_title' => 'php Developer',
        'company' => 'dwdt08 Company',
        'contact_email' => 'faris@gmail.com',
        'contact_phone' => '123-456-7890',
        'skills' => ['php', 'mysql', 'javascript', 'html', 'css']
    ],

    [
        'id' => 2,
        'job_title' => 'syamimi Developer',
        'company' => 'mimi Company',
        'contact_email' => 'syamimi@gmail.com',
        'contact_phone' => '8840626',
        'skills' => ['php', 'mysql', 'javascript', 'html', 'css']
    ],

    [
        'id' => 3,
        'job_title' => 'faris Developer',
        'company' => 'faris Company',
        'contact_email' => 'faris@gmail.com',
        'contact_phone' => '8238020',
        'skills' => ['php', 'mysql', 'javascript', 'html', 'css']
    ]
];

array_push($listings, [
    'id' => 4,
    'job_title' => 'lethal Developer',
    'company' => 'maumakan Company',
    'contact_email' => 'kanmakan@gmail.com',
    'contact_phone' => '5231111',
    'skills' => ['angular', 'mysql']
]);

echo $listings[1]['job_title'];
echo '<br>';
echo $listings[2]['skills'][0];



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
            <!-- <h2 class="text-xl font-bold my-4">reverse ARRAY:</h2> -->

            <!-- <pre><?php print_r($reversed); ?></pre>

            <h2 class="text-xl font-bold my-4">added purple and orange, added pink to array 2 or array [1], pop last ARRAY:</h2>
            <pre><?php print_r($added); ?></pre> -->













        </div>
    </div>
</body>



</html>