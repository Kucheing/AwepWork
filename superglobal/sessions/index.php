<!-- Session:
1. Maintain user data across the page.
2. stored on server.
3. session_start()
4.verysecure in compare w/ cookies.
5. example shopping cart / user preference -->

<?php
session_start(); //to start the session
$_SESSION['name'] = 'Faris🐼💙'; 

if(isset($_SESSION['name'])){
    echo 'Name: '.$_SESSION['name'];
} else {
    echo 'Name is not set.';
}
?>