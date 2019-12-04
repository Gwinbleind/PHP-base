<?php
$a = 10;
$b = 20;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Обмен переменных</title>
    <meta charset="UTF-8">
</head>
<body>
Переменная a = <?=$a?>, переменная b = <?=$b?>
<br>
<?php $a=$b=$a;?>
А теперь переменная a = <?=$a?>, переменная b = <?=$b?>
</body>
</html>