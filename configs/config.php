<?php
$params = [
    "menu" => [
        [
            "title" => "Главная",
            "href" => "/"
        ],
        [
            "title" => "Галерея",
            "href" => "/?page=gallery"
        ],
        [
            "title" => "Картинка #1",
            "href" => "/?page=img_full&imgID=1"
        ]
    ]
];

define(TEMPLATE_DIR, realpath('../templates/')."/");
define(GALLERY_DIR, realpath("../public/gallery/big/")."/");
define(MINIATURE_DIR, realpath("../public/gallery/small/")."/");
define(ALLOWED_EXTENSIONS, ["png", "jpg", "bmp", "jpeg"]);

$db = @mysqli_connect('localhost:3306','geek','geek','gb_php') or Die('Ошибка соединения: ' . mysqli_connect_error());
include realpath('../engine/functions.php');