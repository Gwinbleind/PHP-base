<?php
include realpath('../configs/config.php');
if (isset($_GET['page'])) {
    extract($_GET);
} else {
    $page = 'index';
}

switch ($page) {
    case 'gallery':
        //Подключение к БД
        $db = connectDB();
        //Загрузка галереи
        $params['gallery'] = getGallery($db);
        //Загрузка новой картинки
        if (isset($_POST["load"])) {
            uploadNewImg($db, $_FILES["myFile"]);
        }
        break;
    case 'img_full':
        //Подключение к БД
        $db = connectDB();
        //Загрузка полноразмерной картинки
        $imgFull = getOneImg($db, $_GET['imgID']);
        //передача параметров
        if (isset($imgFull)) {
            $params = array_merge($params, $imgFull);
        }
        //Увеличение просмотров
        if (!viewsIncrement($db, $params['id'])) {
            Die("Проблема с просмотрами");
        }
        break;
}
$params['db'] = $db;
echo renderLayout($page, $params);