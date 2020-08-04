<?php
class Controller {
 //Создаем свойства для контроллера. В виде модели и представления
 public $model;
 public $view;

 function __construct()
 {
 $this->view = new View();
 }

 //Это общий метод. Мы его будет конкретизировать при реализации
//моделей отдельных страниц
function action_index()
 {
 }
}
?> 