<?php
//19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.

$array = array(1, 2, 3, 4, 5, 6, 7, 8);
$day = date("w");

foreach ($array as $value) {

    if ($value == $day) {
        echo "<b>$value</b><br>";
    } else {
        echo $value . "<br>";
    }
}