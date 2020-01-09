<?php
include realpath('../configs/config.php');
if (isset($_GET['page'])) {
    extract($_GET);
} else {
    $page = 'index';
}

$params['actionButtonText'] = 'Отправить';
$params['action'] = 'add';
switch ($page) {
    case '1calc':
        $params['scripts'] = [
            'vue' => [
                'link' => 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js',
                'async' => '0'
            ],
            'calc_vue_js' => [
                'link' => 'js/calc_vue.js',
                'async' => '1'
            ]
        ];
        break;
    case '2calc':
        $params['scripts'] = [
            'vue' => [
                'link' => 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js',
                'async' => '0'
                ],
            'calc_vue_js' => [
                'link' => 'js/calc_vue.js',
                'async' => '1'
            ]
        ];
        $params['links'] = [
            'style_calc' => 'css/calc.css'
        ];
        break;
    case 'gallery':
        //Подключение к БД
        $db = connectDB();
        //Загрузка галереи
        $params['gallery'] = getGallery($db);
        //Загрузка новой картинки
        if (isset($_POST["load"])) {
            uploadNewImg($db, $_FILES["myFile"]);
        }
        break;
    case 'img_full':
        $params['scripts'] = [
            'vue' => [
                'link' => 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js',
                'async' => '0'
            ],
            'feedback_vue_js' => [
                'link' => 'js/feedback.js',
                'async' => '1'
            ]
        ];
        //Подключение к БД
        $db = connectDB();
        //Загрузка полноразмерной картинки
        $imgFull = getOneImg($db, $_GET['imgID']);
        //передача параметров
        if (isset($imgFull)) {
            $params = array_merge($params, $imgFull);
        }
        //Увеличение просмотров
        if (!viewsIncrement($db, $params['id'])) {
            Die("Проблема с просмотрами");
        }
        //Загрузка отзывов
        $feedback = getFeedback($db, $params['id']);
        if (isset($feedback)) {
            $params['feedback'] = $feedback;
        }
        //Обработка CRUD для отзывов
        switch ($_GET['action']) {
            case 'add':
                $name = safeData($db, $_POST['name']);
                $text = safeData($db, $_POST['text']);
                $sql = "INSERT INTO `gallery_feedback`(`name`, `text`, `img_id`) VALUES ('{$name}', '{$text}', {$params['id']})";
                $result = mysqli_query($db, $sql);
                header("Location:/?page=img_full&imgID={$params['id']}&message=OK");
                break;
            case 'edit':
//                var_dump($_GET);
                $feedbackID = (int)$_GET['feedbackID'];
                $editRow = getOneFeedback($db, $feedbackID);
                $params['editRow'] = $editRow;
                $params['actionButtonText'] = 'Исправить';
                $params['action'] = 'save';
                break;
            case 'save':
                $id = safeData($db, $_POST['id']);
                $name = safeData($db, $_POST['name']);
                $text = safeData($db, $_POST['text']);
                $result = editOneFeedback($db, $id, $name, $text);
                header("Location:/?page=img_full&imgID={$params['id']}&message=edit");
                break;
            case 'delete':
                $id = safeData($db, $_GET['feedbackID']);
                $result = deleteFeedback($db, $id);
                header("Location:/?page=img_full&imgID={$params['id']}&message=del");
                break;
        }
        break;
}

$message = [
    "OK" => "Сообщение добавлено",
    "edit" => "Сообщение исправлено",
    "del" => "Сообщение удалено",
];
$params['message'] = $message[$_GET['message']];
//$params['db'] = $db;
//var_dump($params);
echo renderLayout($page, $params);