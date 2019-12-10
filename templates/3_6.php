<?php
echo "<br/>";
const NAME = 0;
const HREF = 1;
$menu = [
    ["Главная","/"],
    ["Каталог заданий","#"],
    [
        ["Лёгкие","#"],
        [
            ["№1","/?page=3_1"],
            ["№2","/?page=3_2"],
            ["№3","/?page=3_3"],
            ["№4","/?page=3_4"],
            ["№5","/?page=3_5"],
            ["№6","/?page=3_6"],
        ],
        ["Сложные","#"],
        [
            ["№7","/?page=3_7"],
            ["№8","/?page=3_8"],
            ["№9","/?page=3_9"],
        ],
    ],
    ["Контакты","https://github.com/Gwinbleind/PHP-base/pull/3"]
];

include "menu_recursive.php";