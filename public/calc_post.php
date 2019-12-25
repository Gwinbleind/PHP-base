<?php
include realpath('../engine/functions.php');

$data = json_decode(file_get_contents('php://input'));
$result = calculate($data->x, $data->y, $data->operation);

$response = [
    'result' => $result
];
header('Content-type: application/json');
echo json_encode($response);