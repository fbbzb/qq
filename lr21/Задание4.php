// styled_text.php - Вывод текста заданного цвета и размера
<?php
$color = "blue"; // Цвет текста
$size = "20px"; // Размер шрифта
$name = "Скоморох Александра"; // ФИО разработчика
?>
<!DOCTYPE html>
<html>
<head>
    <title>Оформленный текст</title>
    <style>
        .styled-text {
            color: <?= $color ?>;
            font-size: <?= $size ?>;
        }
    </style>
</head>
<body>
    <p class="styled-text">ФИО: <?= $name ?></p>
</body>
</html>