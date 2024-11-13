<?php
// specify that we're outputting an JSON document
header('Content-Type: application/json');
$postData = file_get_contents('php://input');
$data = json_decode($postData, true);// объекты JSON будут возвращены как ассоциативные массивы
// calculate the the result
$result = $data['firstNumber'] / $data['secondNumber'];

$arr = array();
$arr['response'] = $result;
echo json_encode($arr);
?>