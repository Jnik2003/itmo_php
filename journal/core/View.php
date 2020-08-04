<?php
class View
{
 //Метод получает указание на имя представления, а также на общий
//шаблон и опционально, если есть передает данные в представление.
 function generate($content_view, $template_view, $data = null)
 {
 /*
 if(is_array($data)) {
 // преобразуем элементы массива в переменные
 extract($data);
 }
 */

 include 'views/'.$template_view;
 }
}
?>