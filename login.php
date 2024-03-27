
<?php
session_start();

// Check if the user is not logged in, redirect to home.php
if (!isset($_SESSION['user'])) {
    header("Location: home.php");
    
}
?>

<h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
<a href="logout.php">Logout</a>

</body>
</html>
