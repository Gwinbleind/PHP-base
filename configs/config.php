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
            "href" => "/?page=gallery"
        ],
        [
            "title" => "4. Каталог",
            "href" => "/?page=catalog"
        ],
    ]
];

define("TEMPLATE_DIR", realpath('../templates/')."/");
define("GALLERY_DIR", realpath("../public/gallery/big/")."/");
define("MINIATURE_DIR", realpath("../public/gallery/small/")."/");
define("ALLOWED_EXTENSIONS", ["png", "jpg", "bmp", "jpeg"]);

include realpath('../engine/render.php');   //Рендер
include realpath('../engine/db.php');       //База данных
include realpath('../engine/calc.php');     //Калькулятор