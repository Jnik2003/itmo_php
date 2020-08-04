<?php
class Model_About extends Model
{
 public function get_data($id = -1)
 {
 //Если мы передаем id нашего автора, то мы выбираем только одну
//запись
 if ($id <> -1) {
 $result = $this->executeQuery("SELECT * FROM authors
WHERE id = ");
 } else {
//Если значение id равно -1, то отдаем весь список авторов
 $result = $this->executeQuery("SELECT * FROM authors");
 }
 return $result;
 }
}
?> 