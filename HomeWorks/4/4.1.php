<?php
/*
вывести здесь то что пришло из формы (как угодно)
не забудьте проверить isset
*/
if (isset($_GET['name'])) {
    var_dump($_GET['name']);
}
?>

<!-- дописать не хватающих атрибутов -->
<form method="get">
    Имя: <input type="text" name="name">
    <button type="submit">отправить</button>
</form>