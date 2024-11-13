<?php
// specify that we're outputting an JSON document
header('Content-Type: application/json');
// calculate the the result
$login = $_POST['login'];
$password = $_POST['password'];

$arr = array();
$arr['login'] = $login;
$arr['password'] = $password;
echo json_encode($arr);
?>