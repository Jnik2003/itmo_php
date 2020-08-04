<?php
//Подключаем все наши общие классы: Модель, Контроллер и Представление
require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
//Подключаем также Роутинг и запускаем его маршрутизатор
require_once 'core/Route.php';
Route::start(); // запускаем маршрутизатор 
?>
