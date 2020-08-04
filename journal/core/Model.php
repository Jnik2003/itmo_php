<?php

class Model
{
 function __construct() {
 //Подключаем БД
 $this->mysqli = mysqli_connect("db", "root", "mypassword", "POSTS");
 //Проверяем есть ли соединение с БД, если нет выводим ошибку
 if ($this->mysqli === false) {
 die("ERROR: Could not connect. " . mysqli_connect_error()); 
 }
 }
 //Здесь мы получаем данные из БД. $query переменная, которая примет в
//себя при вызове метода строку с запросом
 public function executeQuery($query) {
 $res = $this->mysqli->query($query);
 return $res;
 }
 function __destruct() {
 //Освобождаем память. И закрываем соединение
 $this->mysqli->close();
 }
}


?>