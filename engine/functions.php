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
function uploadNewImg($db, $img) {
    $tmp_path = $img["tmp_name"];
    $upload_path = GALLERY_DIR . $img["name"];
    $ext = strtolower(pathinfo($upload_path, PATHINFO_EXTENSION));

    if (in_array($ext, ALLOWED_EXTENSIONS)) {
        insertNewRow($db, $img["name"]);
        $resize_path = MINIATURE_DIR . $img["name"];

        if (move_uploaded_file($tmp_path, $upload_path)) {
            header("Location: /");
        } else {
            echo "Что-то пошло не так!<br>";
        }
        resizeImg($upload_path, $resize_path);
    }
}
function resizeImg($upload_path, $resize_path) {
    include "classSimpleImage.php";
    $image = new SimpleImage();
    $image->load($upload_path);
    $image->resizeToWidth(150);
    $image->save($resize_path);
}