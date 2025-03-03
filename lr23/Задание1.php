<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Дата и время</title>
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
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Текущая дата и время</h2>
    <p><strong>Дата:</strong> <?php echo date("j. m. Y"); ?></p>
    <p><strong>Время:</strong> <?php echo date("H:i:s"); ?></p>
    <p><strong>День недели:</strong> <?php echo date("l"); ?></p>
</div>

</body>
</html>
