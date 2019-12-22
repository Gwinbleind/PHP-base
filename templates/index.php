<br>
Задания по четвертому уроку.<br>
Сразу перевел все ссылки в realpath, по 4-му движку.<br>

<?php
$files = array_splice(scandir(GALLERY_DIR),2);
$dir = "gallery/big";
//var_dump($files);

include "gallery.php";
