<?php
/*
вывести здесь то что пришло из формы (как угодно)
не забудьте проверить isset
*/
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';

if (!empty($name) && !empty($age)) {
    if (!is_numeric($age)) {
        $age = '';
        echo 'введите в поле возраст число';
    } else {
        echo "Привет {$name}, твой возраст: {$age}";
    }
}
?>

<!-- дописать не хватающих атрибутов -->
<form method="post">
    Имя: <input type="text" name="name" value="<?= $name ?>">
    Возраст: <input type="text" name="age" value="<?= $age ?>">
    <button type="submit">отправить</button>
</form>