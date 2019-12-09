<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}


$menu = renderTemplate('menu');
echo renderTemplate('layout', renderTemplate($page));

function renderTemplate($page, $content = '')
{
    global $menu;
    ob_start();
    include "templates/{$page}.php";
    return ob_get_clean();
}
