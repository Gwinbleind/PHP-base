<br>
Задания по четвертому уроку.<br>
Сразу перевел все ссылки в realpath, по 4-му движку.<br>

<?php
$dir = "gallery/big";
$files = array_splice(scandir($dir),2);

include "gallery.php";
