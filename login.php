<?php
// login.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy login logic for illustration
    if ($username === 'user' && $password === 'pass') {
        $message = 'Login successful';
    } else {
        $message = 'Invalid credentials';
    }

    header('Location: index.html?message=' . urlencode($message));
    exit();
}
?>
