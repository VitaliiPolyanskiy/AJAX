<?php
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if($login == "user" && $pass == "qwerty"){
        echo "Авторизация прошла успешно";
    }
    else{
        echo "Неверно введен логин или пароль";
    }
?>
