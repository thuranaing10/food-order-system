<?php
session_start();
//session_destroy();
unset($_SESSION['user']);
unset($_SESSION['pass']);

header("Location:admin.php");

?>
<h1>Logout</h1>