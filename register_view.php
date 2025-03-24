<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="reglog.css">
</head>
<body>
<div class="container">
    <form method="POST" action="register.php">
        <h2>Регистрация</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <div class="form-group">
            <label for="username">Логин:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">Зарегистрироваться</button>
        <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
    </form>
</div>
</body>
</html>