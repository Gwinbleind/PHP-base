<?php
echo "<br/>";
$arr = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Касимов", "Скопин", "Сасово", "Караганда"]
];

foreach ($arr as $key1 => $value) {
    echo $key1, ":<br>";
    $filtered = array_filter($value, function ($item) {
        return mb_substr($item,0,1) == 'К';
    });
//    var_dump($filtered);
    foreach ($filtered as $item) {
        echo $item;
        if (next($filtered)) {
            echo ', ';
        }
    }
    echo "<br>";
}