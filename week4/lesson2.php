<!--Содержимое тем 4 неделю

    Что такое многомерные массив
    Ассоциативные массив
    Интерполяция элементов массива встрок
    Слияние и сравнение массиво
    Конструкция list
    -->
<?php
// -------------------------------------------------------------
// про индексы, преобразование типов

//$array = [1,2,3,4,'1','2'];

//$array = [
//    1 => "a",
//    "1" => "b",
//    1.5 => "c",
//    true => "d",
//];
//var_dump($array);


//$array = [
//    "qqq" => "www",
//    "eee" => "rrr",
//    100 => -100,
//    -100 => 100,
//];
//var_dump($array);


//$array = [
//    "a",
//    "b",
//    6 => "c",
//    "d",
//];
//var_dump($array);


//$array = [
//    1 => 'a',
//    '1' => 'b', // значение "b" перезапишет значение "a"
//    1.5 => 'c', // значение "c" перезапишет значение "b"
//    -1 => 'd',
//    '01' => 'e', // поскольку это не целочисленная строка, она НЕ перезапишет ключ для 1
//    '1.5' => 'f', // поскольку это не целочисленная строка, она НЕ перезапишет ключ для 1
//    true => 'g', // значение "g" перезапишет значение "c"
//    false => 'h',
//    '' => 'i',
//    null => 'j', // значение "j" перезапишет значение "i"
//    'k', // значение "k" присваивается ключу 2. Потому что самый большой целочисленный ключ до этого был 1
//    2 => 'l', // значение "l" перезапишет значение "k"
//];
//
//var_dump($array);

// -------------------------------------------------------------
// вложенные массивы, доступ к элементам

//$numbers = [
//        [
//                3
//        ]
//];
//var_dump($numbers);

//$numbers = [1, [3, 2], [3, [4]]];
//var_dump($numbers);
//$numbers = [[3]];// получить значение 3
//var_dump($numbers[0][0]);
//$numbers = [1, [3, 2], [3, [4]]];// получить значение 4
//var_dump($numbers[2][1][0]);

//$numbers = [[3]];
//var_dump($numbers);
//$numbers[0] = [2, 10];// 0 => [2, 10]
//var_dump($numbers);
//$numbers[] = [3, 4, 5];// new => [3, 4, 5]
//var_dump($numbers);
//$numbers[0][1] = 20;// replace 10 to 20
//var_dump($numbers);
//$numbers[0][] = 30;// add 30 near 20
//var_dump($numbers);

//$array = [
//    "foo" => "bar",
//    42 => 24,
//    "multi" => [
//        "dimensional" => [
//            "array" => "foo"
//        ]
//    ]
//];
//
//var_dump($array["foo"]);
//var_dump($array[42]);
//var_dump($array["multi"]["dimensional"]["array"]);


//function getArray()
//{
//    return [1, 2, 3];
//}
//
//$secondElement = getArray()[1];
//
//var_dump($secondElement);

// -------------------------------------------------------------
// удаление и индексы

//$arr = [5 => 1, 12 => 2];
//var_dump($arr);
//
//$arr[] = 56;    // В этом месте скрипта это
//var_dump($arr);
//// то же самое, что и $arr[13] = 56;
//
//$arr["x"] = 42; // Это добавляет к массиву новый
//var_dump($arr);
//// элемент с ключом "x"
//
//unset($arr[5]); // Это удаляет элемент из массива
//var_dump($arr);
//
//unset($arr);    // Это удаляет массив полностью



//// Создаём простой массив.
//$array = [1, 2, 3, 4, 5];
//var_dump($array);
//
//// Теперь удаляем каждый элемент, но сам массив оставляем нетронутым:
//foreach ($array as $i => $value) {
//    unset($array[$i]);
//}
//var_dump($array);
//
//// Добавляем элемент (обратите внимание, что новым ключом будет 5, вместо 0).
//$array[] = 6;
//var_dump($array);
//
//// Переиндексация:
//$array = array_values($array);
//$array[] = 7;
//var_dump($array);

// -------------------------------------------------------------
// list

//$source_array = ['foo', 'bar', 'baz'];
//[$foo, $bar, $baz] = $source_array;
//var_dump($foo);
//var_dump($bar);
//var_dump($baz);


//$source_array = ['foo', 'bar', 'baz'];
//list($foo, $bar, $baz) = $source_array;
//var_dump($foo);
//var_dump($bar);
//var_dump($baz);


//$source_array = [
//    [1, 'John', 'Seena', '+77778889977'],
//    [2, 'Jane', 'Drake', '+77778889977'],
//    [3, 'Jane', 'Drake', '+77778889977'],
//    [4, 'Jane', 'Drake', '+77778889977'],
//    [5, 'Jane', 'Drake', '+77778889977'],
//    [6, 'Jane', 'Drake', '+77778889977'],
//    [7, 'Jane', 'Drake', '+77778889977'],
//];
//var_dump($source_array);
//foreach ($source_array as $row) {
//    $id = $row[0];
//    $name = $row[1];
//    $lastName = $row[2];
//    $phone = $row[3];
//    var_dump($id, $name, $lastName, $phone);
//}
//foreach ($source_array as [$id, $name, $lastName, $phone]) {
//    var_dump($id, $name, $lastName, $phone);
//}


//$a = 1;
//$b = 2;
//var_dump($a);
//var_dump($b);
//[$b, $a] = [$a, $b];
//var_dump($a);
//var_dump($b);

// -------------------------------------------------------------
// переиндексация

//$a = [1 => 'один', 2 => 'два', 3 => 'три'];
//var_dump($a);
//unset($a[2]);
//var_dump($a);
//
//$b = array_values($a);
//var_dump($b);

// -------------------------------------------------------------
// ошибки: использование кавычек в индексах

//error_reporting(E_ALL);
//$foo[bar] = 'враг';
//echo $foo[bar];


//$array = [1, 2];
//$count = count($array);
//for ($i = 0; $i < $count; $i++) {
//    var_dump("Проверяем $i: ----------------------------------");
//    var_dump("Плохо: " . $array['$i']);
//    var_dump("Хорошо: " . $array[$i]);
//    var_dump("Плохо: {$array['$i']}");
//    var_dump("Хорошо: {$array[$i]}");
//}

// -------------------------------------------------------------
// сравнение массивов

//$weekCount = rand(1,52);
//$weekText = "week";
//$hours = rand(0,23);
//
//$year = (int)date('Y') + 1;
//$newYear = strtotime("+{$weekCount} {$weekText} {$hours}:00:00", strtotime("1 january $year"));
//$currentTime = time();
//echo date('d.m.Y H:i:s', $newYear);

//$array1 = ["a" => "green", "red", "blue", "red", "yellow"];
//$array2 = ["b" => "green", "yellow", "red"];
//$array3 = ["c" => "green", "pink", "purple"];
//var_dump($array1);
//var_dump($array2);
//var_dump($array3);
//$result = array_diff($array1, $array2, $array3);
//
//var_dump($result);

// -------------------------------------------------------------
// объединение массивов
//$a + $b

//$a = ["a" => "apple", "b" => "banana"];
//$b = ["a" => "pear", "b" => "strawberry", "c" => "cherry"];
//
//var_dump($a);
//var_dump($b);

//$c = $a + $b; // Объединение $a и $b
//echo "Объединение \$a и \$b: \n";
//var_dump($c);

//$c = $b + $a; // Объединение $b и $a
//echo "Объединение \$b и \$a: \n";
//var_dump($c);

//$a += $b; // Объединение $a += $b, это $a + $b
//echo "Объединение \$a += \$b: \n";
//var_dump($a);

// -------------------------------------------------------------
// сравнение массивов
// $a == $b и $a === $b (порядок элементов + индексы)

//$a = ["apple", "banana"];
//$b = [1 => "banana", "0" => "apple"];
//$c = ["0" => "apple", 1 => "banana"];
//
//var_dump($a == $b); // bool(true)
//var_dump($a === $b); // bool(false)
//var_dump($a === $c); // bool(true)

// -------------------------------------------------------------
// многомерные массивов

//$fruits = [
//    "fruits" => [
//        "a" => "апельсин",
//        "b" => "банан",
//        "c" => "яблоко"
//    ],
//    "numbers" => [
//        1,
//        2,
//        3,
//        4,
//        5,
//        6
//    ],
//    "holes" => [
//        "первая",
//        5 => "вторая",
//        "третья"
//    ]
//];
//var_dump($fruits);

// Несколько примеров доступа к значениям массива
// Создать новый многомерный массив


// -------------------------------------------------------------
// строка из массива

//$array = [
//        'молоко',
//        'хлеб',
//        'масло',
//        'яйца',
//];
//$result = '<ul>';
//foreach ($array as $value) {
//    $result .= "<li>$value</li>";
//}
//$result .= '</ul>';
//echo $result;

//$result = implode('</li><li>', $array);
//echo '<ul><li>' . $result . '</li></ul>';

// <ul><li>молоко</li><li>хлеб</li><li>яйца</li><li>колбаса</li></ul>

// пример с .=
// недостатки
// пример с implode

// -------------------------------------------------------------
// работа со строкой через массив
// задачка: сделать первую букву каждого слова большой в длинном предложении


//echo mb_convert_case('Сәлем достар, бұл мәтін қазақша', MB_CASE_TITLE);

//var_dump(mb_get_info());
//var_dump(mb_list_encodings());



























































