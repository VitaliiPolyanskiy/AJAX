<?php
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    if($data['login'] == "user" && $data['password'] == "qwerty"){
        echo "Авторизация прошла успешно";
    }
    else{
        echo "Неверно введен логин или пароль";
    }
?>
