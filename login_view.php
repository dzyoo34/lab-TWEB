<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="reglog.css">
</head>
<body>
<div class="container">
    <div class="form-container">
        <h2>Вход</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label>Логин:</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Пароль:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn">Войти</button>
        </form>
        <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
        <?php if (!empty($error)) echo "<p class='message error'>$error</p>"; ?>
    </div>
</div>
</body>
</html>