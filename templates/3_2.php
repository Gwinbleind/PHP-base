<?php
echo "<br/>";
$i = 0;
while ($i <= 10) {
    $str = ($i == 0) ? "ноль" : (!($i % 2) ? "четное число" : "нечетное число");
    echo $i, ' - ', $str, '.<br>' ;
    $i++;
}