<?php
include 'db_connection.php';

$pdo = new PDO("mysql:host=$host", $username, $password);

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbName";
$pdo->exec($sql);

// Select the database
$pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

// Create books table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS books (
    id int auto_increment primary key,
    title varchar(100) NOT NULL,
    author varchar(100) NOT NULL,
    genre varchar(50) NOT NULL,
    description varchar(500) NOT NULL,
    price int NOT NULL
)";
$pdo->exec($sql);

$books = [
    ['Syazwana tarik rambut faris pt1', 'Faizura', 'bully', 'On monday when syazwana was alone sad sitting down at the', 18],
    ['Syazwana tarik rambut faris pt2', 'kaira', 'revenge', 'lowest floor at the bench near the vending machine, faris went down to go and met her, then time goes pass and syazwana has pulled on faris hair', 18],
    ['Syazwana tarik rambut faris pt3', 'sumikko', 'hate', 'making it a memorable memory to be remembered', 18],
    // Add more books as needed
];

foreach ($books as $book) {
    // Check if the book already exists
    $sql = "SELECT * FROM books WHERE title = ? AND author = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$book[0], $book[1]]);
    $result = $stmt->fetchAll();

    // If the book does not exist, insert it
    if (count($result) == 0) {
        $sql = "INSERT INTO books (title, author, genre, description, price) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$book[0], $book[1], $book[2], $book[3], $book[4]]) !== TRUE) {
            echo "Error inserting book: " . $stmt->errorInfo()[2];
        }
    }
}
?>