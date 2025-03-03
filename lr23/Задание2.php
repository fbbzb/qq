<?php
function getRussianDayOfWeek($date = null) {
    $days = [
        "Sunday" => "Воскресенье",
        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота"
    ];

    if ($date === null) {
        $date = date("Y-m-d");
    }

    return $days[date("l", strtotime($date))];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>День недели</title>
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
    <h2>Определение дня недели</h2>
    <p><strong>Сегодня:</strong> <?php echo date("d.m.Y"); ?></p>
    <p><strong>День недели:</strong> <?php echo getRussianDayOfWeek(); ?></p>
</div>

</body>
</html>
