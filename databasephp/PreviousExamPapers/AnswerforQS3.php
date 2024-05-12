<?php 
require_once 'databaseQS3.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Search Results</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body class="bg-gray-200 py-20">
    <h1>Book Search Results</h1>

    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4">
    <div class="bg-indigo-500 text-white px-4 py-2 rounded-t-xl">
        <h2 class="text-lg font-bold">Book Search</h2>
    </div>
    <form action="" method="post" class="p-8">
        <label for="title" class="block text-lg font-medium text-gray-700">Title:</label>
        <input type="text" id="title" name="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
        <label for="author" class="block text-lg font-medium text-gray-700 mt-6">Author:</label>
        <input type="text" id="author" name="author" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
        <label for="genre" class="block text-lg font-medium text-gray-700 mt-6">Genre:</label>
        <input type="text" id="genre" name="genre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md p-2">
        <input type="submit" value="Submit" class="mt-6 bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-600 transition duration-200 ease-in-out transform hover:-translate-y-1 hover:scale-110">
    </form>
</div>


    <?php
    // i. Retrieve all books from database
    $sql = 'SELECT * FROM books';
    $result = $pdo->query($sql);
    if ($result->rowCount() > 0) {
        echo "<h2>All Books</h2>";
        echo "<table><tr><th>ID</th><th>Title</th><th>Author</th><th>Genre</th></tr>";
        while($row = $result->fetch()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"]. "</td><td>" . $row["author"]. "</td><td>" . $row["genre"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No books found</p>";
    }

    // ii. Retrieve books from the database that match the user’s search criteria (title, author, or genre)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $stmt = $pdo->prepare("SELECT * FROM books WHERE title LIKE ? OR author LIKE ? OR genre LIKE ?");
        $stmt->bindParam(1, $title, PDO::PARAM_STR);
        $stmt->bindParam(2, $author, PDO::PARAM_STR);
        $stmt->bindParam(3, $genre, PDO::PARAM_STR);
        if ($stmt->execute()) {
            $result = $stmt->fetchAll();
            if (count($result) > 0) {
                echo "<h2>Search Results</h2>";
                echo "<table><tr><th>ID</th><th>Title</th><th>Author</th><th>Genre</th></tr>";
                foreach($result as $row) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"]. "</td><td>" . $row["author"]. "</td><td>" . $row["genre"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No books found that match your search criteria</p>";
            }
        } else {
            echo "<p>Error: " . $stmt->errorInfo()[2] . "</p>";
        }
    }
    $pdo = null;
    ?>



</body>
</html>