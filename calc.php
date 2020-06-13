<?php
if (!empty($_POST)) {
    $x = isset($_POST['x']) ? $_POST['x'] : '';
    $y = isset($_POST['y']) ? $_POST['y'] : '';
    $operation = !empty($_POST['operation']) ?
        $_POST['operation']        : '';
    switch ($operation) {
        case 'sum':
            $result = $x . '+' . $y . '=' . ($x + $y);
            break;
        case 'diff':
            $result = $x . '-' . $y . '=' . ($x - $y);
            break;
        case '*':
            $result = $x . '*' . $y . '=' . ($x * $y);
            break;
        case '/':
            if ($y == 0) {
                $result = 'Нельзя делить на ноль';
                break;
            }
            $result = $x . '/' . $y . '=' . ($x / $y);
            break;
        default:
            $result = 'Передан неизвестный тип операции';
    }
    echo $result;
}
