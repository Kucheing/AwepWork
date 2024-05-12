<?php
//URL -> localhost/awep-project/superglobal/get.php/?name=faris&&age=18

echo $_GET['name'] ?? ''; //faris

// URL -> localhost/awep-project/superglobal/get.php/?name=<script>alert(1);</script>
//cross-scripting hack

echo htmlspecialchars($_GET['name'] ?? ''); //faris
?>