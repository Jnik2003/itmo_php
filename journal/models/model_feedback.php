<?php
class Model_Feedback extends Model
{
 public function send_data($data = null)
 {
 //Если переменная-параметр $data не пустая, то добавляем данные
 if (!empty($data)) {
 $result = $this->executeQuery("INSERT INTO feedback (user,
comment, email) VALUES ('".$data['user']."', '".$data['comment']."',
'".$data['email']."');");
 //Если запрос пошел не так получаем код ошибки и отдаем в
//качестве ответа на запрос
 if (!$result) {
 $result = mysqli_error($this->mysqli); 
 }
 } else {
 //Если что-то не так с данными говорим, что Empty Data
 $result = 'Empty data!';
 }
 return $result;
 }
}
?> 