
<?php 
require_once 'books_db.php';

$title = $_POST['title'];
$auth = $_POST['author'];
$genre = $_POST['genre'];

?>

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
    <!-- Start of form. The form submits to the same page (action="") using the POST method -->
    <form action="" method="post">
        <!-- Input field for the number. The name attribute is used to access its value in the PHP code above -->
        <input type="text" name="title" id="">
    </form>
    <!-- Start of form. The form submits to the same page (action="") using the POST method -->
    <form action="" method="post">
        <!-- Input field for the number. The name attribute is used to access its value in the PHP code above -->
        <input type="text" name="author" id="">
    </form>
    <!-- Start of form. The form submits to the same page (action="") using the POST method -->
    <form action="" method="post">
        <!-- Input field for the number. The name attribute is used to access its value in the PHP code above -->
        <input type="text" name="genre" id="">
    </form>
</body>
</html>