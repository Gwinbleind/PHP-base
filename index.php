<?php
define(TEMPLATE_DIR, "templates/");
define(LAYOUT_DIR, "layouts/");
define(ALLOWED_EXTENSIONS, ["png", "jpg", "bmp", "jpeg"]);

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
//        [
//            "title" => "№1",
//            "href" => "/?page=4_1"
//        ],
//        [
//            "title" => "№2",
//            "href" => "/?page=4_2"
//        ],
//        [
//            "title" => "№3",
//            "href" => "/?page=4_3"
//        ],
//        [
//            "title" => "№4",
//            "href" => "/?page=4_4"
//        ],
    ]
];

echo renderLayout($page, $params);
//echo renderTemplate('layout', renderTemplate($page), renderTemplate('menu'));
function renderTemplate($page, $params = [])
{
    ob_start();
    if (!is_null($params)) {
        extract($params);
    }
//    $fileName = TEMPLATE_DIR . $page . ".php";
    $fileName = realpath(TEMPLATE_DIR . $page . ".php");
    if (file_exists($fileName)) {
        include $fileName;
    } else {
        exit("Страницы {$page} не существует");
    }
    return ob_get_clean();
}

function renderLayout($page, $params = []) {
    return renderTemplate("layout", [
        "content" => renderTemplate($page, $params),
        "menu" => renderTemplate("menu", $params),
    ]);
}