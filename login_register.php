<?php
session_start();
include 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ===== REGISTER =====
    if (isset($_POST['fullname'], $_POST['username'], $_POST['confirm_password'])) {
        $fullname   = $conn->real_escape_string($_POST['fullname']);
        $email      = $conn->real_escape_string($_POST['email']);
        $username   = $conn->real_escape_string($_POST['username']);
        $password   = $_POST['password'];
        $confirm    = $_POST['confirm_password'];
        $gender     = isset($_POST['gender']) ? $conn->real_escape_string($_POST['gender']) : '';
        $country    = $conn->real_escape_string($_POST['country']);
        $hobbies    = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : '';

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error_register'] = "Invalid email format.";
            header("Location: index.php?form=register");
            exit();
        }

        // Check password match
        if ($password !== $confirm) {
            $_SESSION['error_register'] = "Passwords do not match.";
            header("Location: index.php?form=register");
            exit();
        }

        // Check duplicate username
        $checkUser = $conn->query("SELECT id FROM users WHERE username='$username'");
        if ($checkUser->num_rows > 0) {
            $_SESSION['error_register'] = "Username already taken.";
            header("Location: index.php?form=register");
            exit();
        }

        // Check duplicate email
        $checkEmail = $conn->query("SELECT id FROM users WHERE email='$email'");
        if ($checkEmail->num_rows > 0) {
            $_SESSION['error_register'] = "Email already taken.";
            header("Location: index.php?form=register");
            exit();
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert into DB
        $sql = "INSERT INTO users (fullname, email, username, password, gender, hobbies, country) 
                VALUES ('$fullname', '$email', '$username', '$hashedPassword', '$gender', '$hobbies', '$country')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_register'] = "Registration successful! Please log in.";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error_register'] = "Server error. Please try again.";
            header("Location: index.php");
            exit();
        }
    }

    // ===== LOGIN =====
    elseif (isset($_POST['username'], $_POST['password'])) {
        $username = $conn->real_escape_string($_POST['username']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password'])) {
                // Save session
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                header("Location: dashboard.php");
                exit();
            } else {
                $_SESSION['error_login'] = "Incorrect password.";
                header("Location: index.php");
                exit();
            }
        } else {
            $_SESSION['error_login'] = "No account found with that username.";
            header("Location: index.php");
            exit();
        }
    }
}

$conn->close();
?>
