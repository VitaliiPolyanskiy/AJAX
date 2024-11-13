<?php
// specify that we're outputting an JSON document
header('Content-Type: application/json');
// calculate the the result
$firstNumber = $_GET['firstNumber'];
$secondNumber = $_GET['secondNumber'];
$result = $firstNumber / $secondNumber;

$arr = array();
$arr['response'] = $result;
echo json_encode($arr);
?>