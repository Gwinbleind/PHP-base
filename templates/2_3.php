<?php
$a = random_int(-10,10);
$b = 0;
function sum($x, $y) {
	return $x + $y;
}
function difference($x, $y) {
	return $x - $y;
}
function multiplication($x, $y) {
    return $x * $y;
}
function division($x, $y) {
   if ($y == 0) {
   	return "Ошибка! Деление на 0";
   } else {
       return $x / $y;
   }
}
?>
<b>Пункт 3</b>
Первое число = <?=$a ?>, второе число = <?=$b ?>, сумма = <?=sum($a,$b)?>, разность = <?=difference($a,$b)?>, произведение = <?=multiplication($a,$b)?>, деление = <?=division($a,$b)?>
</br>