<?php
// Include the database connection file
include 'books_db_connection.php';

// Check if form is submitted
if (!empty($_POST)) {
    // Get user search criteria
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $author = isset($_POST['author']) ? $_POST['author'] : '';
    $genre = isset($_POST['genre']) ? $_POST['genre'] : '';

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM books WHERE title LIKE ? AND author LIKE ? AND genre LIKE ?");
    $stmt->bind_param("sss", $title, $author, $genre);

    // Execute the statement
    if ($stmt->execute()) {
        $result = $stmt->get_result();

        // Check if there are results
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Author: " . $row["author"]. " - Genre: " . $row["genre"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();