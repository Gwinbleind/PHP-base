<?php

function renderTemplate($page, $params = [])
{
    ob_start();
    if (!is_null($params)) {
        extract($params);
    }
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
//Функции БД
function sendQuery($db, $query) {
    return mysqli_query($db, $query);
}
function getGallery($db) {
    return sendQuery($db, 'SELECT * FROM gallery ORDER BY views DESC');
}
function getOneImg($db, $id) {
    $result = mysqli_query($db,"SELECT `id`, `img`, `name`, `views` FROM `gallery` WHERE `id`={$id}");
    return $result->fetch_assoc();
}
function viewsIncrement ($db, $id) {
    return mysqli_query($db, "UPDATE `gallery` SET `views`=`views`+1 WHERE `id`={$id}");  //Подглядел в разборе, что можно простые вычисления в сроке запроса делать
}
function insertNewRow($db, $name) {
    return mysqli_query($db, "INSERT INTO gallery (`id`, `img`, `prev`, `name`, `views`) VALUES (NULL, 'gallery/big/{$name}', 'gallery/small/{$name}', '{$name}', '0');");
}
//Функции калькулятора
function amount(float $a, float $b) {
    return $a + $b;
}
function difference(float $a, float $b) {
    return $a - $b;
}
function multiplication(float $a, float $b) {
    return $a * $b;
}
function division(float $a, float $b) {
    if ($b == 0) {
        return "Error: divided by zero";
    } else {
        return $a / $b;
    }
}
function calculate(float $a, float $b, string $operation) {
    switch ($operation) {
        case '/':
            return division($a, $b);
            break;
        case '*':
        case 'x':
        case 'х':
            return multiplication($a, $b);
            break;
        case '-':
            return difference($a, $b);
            break;
        case '+':
            return amount($a, $b);
            break;
    }
}