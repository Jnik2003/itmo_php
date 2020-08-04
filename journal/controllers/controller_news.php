<?php
//Наследуем все методы от класса Controller и уточняем их для реализации
//конкретной страницы
class Controller_News extends Controller
{
 //Как только мы создадим экземпляр нашего класса произойдет вызов
//конструктора
 function __construct() 
 {
 //Создаем экземпляр класса модели Model_News
$this->model = new Model_News();
//Создаем экземпляр класса представления
 $this->view = new View();
 }

 //Метод действия по-умолчанию.
 function action_index()
 {
 //Получаем данные от модели
 $data = $this->model->get_data();
 //Передаем полученные данные в представление и указываем имя
//файла шаблона и страницы
 $this->view->generate('news_view.php', 'template_view.php', $data);
 }
}
?> 