<?php
//Расширяем класс модели
class Model_News extends Model
{
 //Реализуем метод get_data, который мы вызывали в контроллере news
//выше
 public function get_data() 
 {
 //Вызываем родительский метод от класса Model и исполняем строку sqlзапроса, которую передаем в метод. Результатом работы будет массив с
//данными.
$result = $this->executeQuery("SELECT * FROM last_news");
//Возвращаем результат работы
 return $result;
 }
}
?> 