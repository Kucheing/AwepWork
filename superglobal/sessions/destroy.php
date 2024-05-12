<?php
session_start();

unset($_SESSION['name']);  // unsetting the session variable
session_destroy();  // destroying the session
echo 'Session Destroyed';   // displaying message saying session destroyed

?>