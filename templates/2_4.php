<?php
$a = random_int(-10,10);
$b = random_int(-10,10);
function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		 case "sum":
		 case "сумма":
		 case "+":
		 	return sum($arg1,$arg2);
		 	break;
		 case "difference":
		 case "разность":
		 case "-":
		 	return difference($arg1,$arg2);
		 	break;
		 case "multiplication":
		 case "умножение":
		 case "*":
		 	return multiplication($arg1,$arg2);
		 	break;
		 case "division":
		 case "деление":
		 case "/":
		 	return division($arg1,$arg2);
		 	break;
	}
}
?>
<b>Пункт 4</b>
Первое число = <?=$a ?>, второе число = <?=$b ?>, сумма = <?=mathOperation($a,$b,"+")?>, разность = <?=mathOperation($a,$b,"-")?>, произведение = <?=mathOperation($a,$b,"*")?>, деление = <?=mathOperation($a,$b,"/")?>
</br>