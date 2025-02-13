<?php
$S1 = "Я люблю Беларусь";
$S2 = "Я учусь в Политехническом колледже";

// 1. Длина строки S1
$length_S1 = mb_strlen($S1, "UTF-8");
echo "Длина строки S1: $length_S1 <br>";

// 2. Выделение n-го символа (n = 3) и определение его ASCII-кода
$n = 3;
$char = mb_substr($S1, $n - 1, 1, "UTF-8"); // Выделяем 3-й символ
$ascii = ord(mb_convert_encoding($char, "Windows-1251", "UTF-8")); // Получаем ASCII-код
echo "Символ номер $n в строке S1: $char <br>";
echo "ASCII-код символа '$char': $ascii <br>";

// 3. Замена всех букв "ю" на "№" в строке S1
$S1_replaced = str_replace("ю", "№", $S1);
echo "Строка S1 после замены: $S1_replaced <br>";
?>
