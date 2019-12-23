<?php
include realpath('../configs/config.php');
include realpath('../engine/functions.php');

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$params = [
    "menu" => [
        [
            "title" => "Главная",
            "href" => "/"
        ],
    ]
];

echo renderLayout($page, $params);