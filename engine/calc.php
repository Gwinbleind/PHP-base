<?php
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