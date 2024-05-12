<?php
require 'database.php'; // Include the database connection file

//form method is POST and submit btn is clicked. // Check if the form method is POST and the submit button is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $title = htmlspecialchars($_POST['title']); // Get the title from the form and sanitize it
    $body = htmlspecialchars($_POST['body']); // Get the body from the form and sanitize it

    // Prepare an SQL statement to insert the title and body into the posts table
    $sql = 'INSERT INTO posts(title, body) VALUES(:title, :body)'; //:title :body is the parameter for the prepared statement
    $stmt = $pdo->prepare($sql); // Prepare the SQL statement

    // Define the parameters for the prepared statement
    $param = [
        'title' => $title,
        'body' => $body
    ];

    $stmt->execute($param); // Execute the prepared statement with the parameter values

    header('Location: index.php'); // Redirect to the index page after the post is created
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">My Blog</h1>
        </div>
    </header>
    <div class="flex justify-center mt-10">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h1 class="text-2xl font-semibold mb-6">Create Blog Post</h1>
            <form method="post">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium">Title</label>
                    <input type="text" id="title" name="title" placeholder="Enter post title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
                </div>
                <div class="mb-6">
                    <label for="body" class="block text-gray-700 font-medium">Body</label>
                    <textarea id="body" name="body" placeholder="Enter post body" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
                        Submit
                    </button>
                    <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>