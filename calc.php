<?php
if (!empty($_POST)) {
 $x = !empty($_POST['x']) ? $_POST['x'] : '';
 $y = !empty($_POST['y']) ? $_POST['y'] : '';
 $operation = !empty($_POST['operation']) ?
 $_POST['operation']
 : '';
 if (!is_int($x) || !is_int($y)) {
 echo 'Неверный тип данных';
 } else {
 switch ($operation) {
 case 'sum':
 $result = $x.'+'.$y.'=' . ($x + $y);
 break;
 case 'diff':
 $result = $x.'-'.$y.'=' . ($x - $y);
 break;
 default:
 $result = 'Передан неизвестный тип операции';
 }
 echo $result;
 }
}
