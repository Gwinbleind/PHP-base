<?php
//Функции БД
function connectDB() {
    $db = @mysqli_connect('localhost:3306','geek','geek','gb_php') or Die('Ошибка соединения: ' . mysqli_connect_error());
    return $db;
}
function sendQuery($db, $query) {
    return mysqli_query($db, $query);
}
function getGallery($db) {
    return sendQuery($db, 'SELECT * FROM gallery ORDER BY views DESC');
}
function getOneImg($db, $id) {
    $result = mysqli_query($db,"SELECT `id`, `img`, `name`, `views` FROM `gallery` WHERE `id`={$id}");
    return $result->fetch_assoc();  //Переделать ООП в функцию
}
function viewsIncrement ($db, $id) {
    return mysqli_query($db, "UPDATE `gallery` SET `views`=`views`+1 WHERE `id`={$id}");
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