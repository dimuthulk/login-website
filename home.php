<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
?>
<a href="logout.php">Logout</a>
<h1>Admin Dashboard</h1> 
