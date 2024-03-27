

<?php
    session_start();

    // Check if the user is already logged in, redirect to home.php if true
    if (isset($_SESSION['user'])) {
        header("Location: login.php");
        
    }

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $valid_username = 'velan';
        $valid_password = '12345';

        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['user'] = $username; // Set the user session variable
            header("Location: login.php");
            
        } else {
            echo "Invalid username or password";
        }
    }
?>

<h2>Login</h2>
<form action="" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

</body>
</html>
