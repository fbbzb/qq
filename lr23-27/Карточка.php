<?php
session_start();

// Регистрация пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    if ($password !== $password_repeat) {
        $error = "Пароли не совпадают!";
    } else {
        $_SESSION['fio'] = $fio;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        
        // Запись в файл
        file_put_contents("fio.txt", "ЛОГИН: $fio\nE-mail: $email\nПАРОЛЬ: $password");

        $success = "Регистрация успешна!";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Форма</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; text-align: center; }
        .container { width: 50%; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input, button { margin: 5px; padding: 10px; width: 90%; border: 1px solid #ccc; border-radius: 5px; }
        button { background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form method="POST">
            <input type="text" name="fio" placeholder="Ф.И.О." required><br>
            <input type="email" name="email" placeholder="E-mail" required><br>
            <input type="password" name="password" placeholder="Пароль" required><br>
            <input type="password" name="password_repeat" placeholder="Повторите пароль" required><br>
            <input type="checkbox" name="agreement" required> Я принимаю соглашение<br>
            <button type="submit" name="register">Зарегистрироваться</button>
        </form>
        
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <?php if (isset($success)) echo "<p class='success'>$success</p>"; ?>

        <h3>Данные из сессии</h3>
        <?php if (isset($_SESSION['fio'])): ?>
            <p>Ф.И.О.: <?= $_SESSION['fio']; ?></p>
            <p>E-mail: <?= $_SESSION['email']; ?></p>
            <p>Пароль: <?= $_SESSION['password']; ?></p>
            <p>ID сессии: <?= session_id(); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
