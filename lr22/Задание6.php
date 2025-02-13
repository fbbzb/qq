<?php
function calculateFirst($x) {
    // Первая функция f(x) = -x^2, если x >= 7
    return -pow($x, 2);
}

function calculateSecond($x) {
    // Вторая функция f(x) = 2^(-x) / (x^2 - 9^x), если x < 7
    return pow(2, -$x) / (pow($x, 2) - pow(9, $x));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x"];
    try {
        // Проверка на исключительные ситуации
        if (!is_numeric($x)) {
            throw new Exception("Ошибка: x должно быть числом.");
        }
        if ($x == 0) {
            throw new Exception("Ошибка: деление на ноль.");
        }
        if ($x < 0 && $x >= -7) {
            throw new Exception("Ошибка: корень из отрицательного числа невозможен.");
        }

        // В зависимости от значения x выбираем нужную функцию
        if ($x >= 7) {
            $result = calculateFirst($x);
        } else {
            $result = calculateSecond($x);
        }

        echo "Результат вычислений при x = $x: $result";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>

<!-- HTML-форма для ввода x -->
<form method="post">
    Введите x: <input type="text" name="x">
    <button type="submit">Рассчитать</button>
</form>