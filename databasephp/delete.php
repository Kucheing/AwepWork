<?php
require 'database.php'; // Include the database connection file

// Check if the request method is POST and if the _method field in the POST data is 'delete'
$isDeleteReq = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete');

if ($isDeleteReq) { // If the condition above is true, proceed with the deletion
    $id = $_POST['id']; // Get the id from the POST data

    // Prepare an SQL statement to delete the post with the given id
    $sql = 'DELETE FROM posts WHERE id = :id';

    $stmt = $pdo->prepare($sql); // Prepare the SQL statement

    $param = ['id' => $id]; // Define the parameter for the prepared statement

    // Execute the prepared statement, passing in the id as a parameter
    $stmt->execute($param);

    header('Location: index.php'); // Redirect the user to the index page
    exit; // Terminate the script
}
