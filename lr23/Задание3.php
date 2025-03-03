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
    <title>Определение дня недели</title>
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
        .button {
            background: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .button:hover {
            background: #0056b3;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Определение дня недели</h2>
    <form method="post">
        <button class="button" type="submit" name="show_day">Определить</button>
    </form>
    <?php
    if (isset($_POST['show_day'])) {
        echo "<p><strong>Сегодня:</strong> " . getRussianDayOfWeek() . ".</p>";
    }
    ?>
</div>

</body>
</html>
