<?php
$params = [
    "menu" => [
        [
            "title" => "Главная",
            "href" => "/"
        ],
        [
            "title" => "1. Калькулятор",
            "href" => "/?page=1calc"
        ],
        [
            "title" => "2. Калькулятор",
            "href" => "/?page=2calc"
        ],
        [
            "title" => "3. Отзывы",
            "href" => "/?page=review"
        ],
        [
            "title" => "4. Каталог",
            "href" => "/?page=catalog"
        ],
    ]
];

define(TEMPLATE_DIR, realpath('../templates/')."/");
define(GALLERY_DIR, realpath("../public/gallery/big/")."/");
define(MINIATURE_DIR, realpath("../public/gallery/small/")."/");
define(ALLOWED_EXTENSIONS, ["png", "jpg", "bmp", "jpeg"]);

$db = @mysqli_connect('localhost:3306','geek','geek','gb_php') or Die('Ошибка соединения: ' . mysqli_connect_error());
include realpath('../engine/functions.php');