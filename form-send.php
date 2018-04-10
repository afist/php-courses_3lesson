<?php


if (!empty($_POST)){

    $user_name = test_input($_POST["user_name"]);
    $password = test_input($_POST["password"]);
}
elseif(!empty($_GET)){
    $user_name = test_input($_GET["user_name"]);
    $password = test_input($_GET["password"]);
    }
function test_input($data) {
    $data = trim($data); // удаляем пробелы с конца и начала строки
    $data = stripslashes($data); // Удаляет экранирование символов
    $data = htmlspecialchars($data); //Преобразует специальные символы в HTML-сущности
    return $data;
}
//var_dump($get);

if (!empty($_GET)){
    echo "Method GET;  <br> Имя: ".$user_name."<br>Пароль: ".$password."<br>";
}


if (!empty($_POST)){

echo "Method POST; <br> Имя: ".$user_name."<br>Пароль: ".$password."<br>";

}
?>