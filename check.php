<?php
include 'db_connect.php';

if (isset($_GET['username'])) {
    $username = $conn->real_escape_string($_GET['username']);
    $result = $conn->query("SELECT id FROM users WHERE username='$username'");
    echo $result->num_rows > 0 ? 'taken' : 'available';
}

if (isset($_GET['email'])) {
    $email = $conn->real_escape_string($_GET['email']);
    $result = $conn->query("SELECT id FROM users WHERE email='$email'");
    echo $result->num_rows > 0 ? 'taken' : 'available';
}
?>
