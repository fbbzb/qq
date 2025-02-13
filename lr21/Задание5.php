// constants.php - Работа с константой
<?php
const NUM_E = 2.71828;
$num_e1 = NUM_E;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Константы в PHP</title>
</head>
<body>
    <p>Число e равно <?= NUM_E ?></p>
    <p>Тип переменной: <?= gettype($num_e1) ?></p>
    <?php $num_e1 = (string) $num_e1; ?>
    <p>После преобразования в строку: <?= gettype($num_e1) ?> - <?= $num_e1 ?></p>
    <?php $num_e1 = (int) $num_e1; ?>
    <p>После преобразования в целое число: <?= gettype($num_e1) ?> - <?= $num_e1 ?></p>
    <?php $num_e1 = (bool) $num_e1; ?>
    <p>После преобразования в boolean: <?= gettype($num_e1) ?> - <?= $num_e1 ? 'true' : 'false' ?></p>
</body>
</html>