<?php
include realpath('../configs/config.php');
if (isset($_GET['page'])) {
    extract($_GET);
} else {
    $page = 'index';
}

switch ($page) {
    case 'gallery':
        $params['gallery'] = getGallery($db);
        break;
    case 'img_full':
        $params['imgFull'] = getOneImg($db, $_GET['imgID']);
        break;
}
$params['db'] = $db;
echo renderLayout($page, $params);