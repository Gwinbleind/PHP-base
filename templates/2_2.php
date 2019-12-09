<?php
$a = random_int(0,15);
?>
<b>Пункт 2 а)</b> Число = <?=$a?> Ряд:
<?php
switch ($a) {
    case 0:
        echo "0 ";
    case 1:
        echo "1 ";
    case 2:
        echo "2 ";
    case 3:
        echo "3 ";
    case 4:
        echo "4 ";
    case 5:
        echo "5 ";
    case 6:
        echo "6 ";
    case 7:
        echo "7 ";
    case 8:
        echo "8 ";
    case 9:
        echo "9 ";
    case 10:
        echo "10 ";
    case 11:
        echo "11 ";
    case 12:
        echo "12 ";
    case 13:
        echo "13 ";
    case 14:
        echo "14 ";
    case 15:
        echo "15";
}
?>
</br>
<b>Пункт 2 б)</b> Число = <?=$a?> Ряд:
<?php
function f1($x) {
    if ($x <= 15) {
        echo "$x ";
        f1($x+1);
    }
}
f1($a);
?>
</br>