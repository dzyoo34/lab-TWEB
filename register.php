<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($email) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $file = "users.json";
        $user_data = "$username|$email|$hashed_password\n";

        file_put_contents($file, $user_data, FILE_APPEND | LOCK_EX);

        $_SESSION["username"] = $username;
        header("Location: login.php");
        exit();
    } else {
        $error = "Заполните все поля!";
    }
}

include 'register_view.php';
?>