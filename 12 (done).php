<?php
// Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.

$n = 1000;

for ($i = 0; $n >= 50; $i++) {
    $n /= 2;
}
echo $n . '<br/>';
echo $i . '<br/>';