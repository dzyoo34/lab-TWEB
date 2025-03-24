<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($password)) {
        $users = file("users.json", FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($stored_user, $stored_email, $stored_hash) = explode("|", $user);
            if ($username === $stored_user && password_verify($password, $stored_hash)) {
                $_SESSION["user"] = $username;
                header("Location: index.php");
                exit;
            }
        }
        $error = "Неправильный логин или пароль!";
    } else {
        $error = "Заполните все поля!";
    }
}
include 'login_view.php';
?>