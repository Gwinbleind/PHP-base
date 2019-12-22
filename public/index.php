<?php
include realpath('../configs/config.php');
if (isset($_GET['page'])) {
    extract($_GET);
} else {
    $page = 'index';
}

switch ($page) {
    case 'img_full':
        $params['imgID'] = $_GET['imgID'];
        break;
}
$params['db'] = $db;
echo renderLayout($page, $params);