<?php
/*
вывести здесь то что пришло из формы (как угодно)
не забудьте проверить isset
*/

?>

<!-- Задайте правильное название в атрибуте name, чтобы данные из этой формы отправились как массив -->
<form method="post">
    <div>
        Первый ученик:<br> ФИО: <input type="text" name="">
    </div>
    <hr>
    <div>
        Второй ученик:<br> ФИО: <input type="text" name="">
    </div>
    <hr>
    <div>
        Третий ученик:<br> ФИО: <input type="text" name="">
    </div>
    <hr>
    <div>
        Четвертый ученик:<br> ФИО: <input type="text" name="">
    </div>
    <hr>

    <button type="submit">отправить</button>
</form>