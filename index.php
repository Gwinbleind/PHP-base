<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

echo renderTemplate('layout', renderTemplate($page), renderTemplate('menu'));

function renderTemplate($page, $content = '', $menu = '')
{
    ob_start();
    include "templates/{$page}.php";
    return ob_get_clean();
}
