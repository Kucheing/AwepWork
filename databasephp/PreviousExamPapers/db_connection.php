<?php
//PDO -- PHP Data Objects
// DSN -- Data Source Name -- information database.
//The MySQL database is named ‘books_db’
$host = 'localhost'; //our client. server in the laptop
$port = 3306;
$dbName = 'books_db';
$username = 'root';
$password = '';
//DSN name
$dsn = "mysql:host={$host}; port={$port}; dbname={$dbName}; charset=utf8";
// wrap in try and catch the error,
try {
    //create PDO Instance
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // The above line is to set the error mode to exception. If there is an error, it will throw an exception.
    
    //Fetch as associative Array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo 'Database connected...';
    // // Redirect to AnswerforQS3.php after successful connection
    // header('Location: AnswerforQS3.php');
    // exit;
} catch (PDOException $e) {
    echo 'Connection failed' . $e->getMessage();
}
?>