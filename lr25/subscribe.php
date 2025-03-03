<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Подписка на рассылку</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 50px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        .input-field {
            margin: 10px;
            padding: 8px;
            width: 250px;
            display: block;
        }
        .button {
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .button:hover {
            background: #0056b3;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Подписка на рассылку</h2>
    <form method="POST" action="send_email.php">
        <input class="input-field" type="email" name="email" placeholder="Введите ваш email" required>
        <button class="button" type="submit">Подписаться</button>
    </form>
</div>

</body>
</html>
