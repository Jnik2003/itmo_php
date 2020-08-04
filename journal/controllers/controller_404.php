<?php
//Реализация класса контроллера 404 страницы
class Controller_404 extends Controller
{
//Уточняем только событие действия. Мы просто говорим подцепить
//страницу 404 для вывода в общем шаблоне
 function action_index()
 {
 $this->view->generate('404_view.php', 'template_view.php');
 }
}
?>