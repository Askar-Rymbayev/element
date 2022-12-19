<?php

//function func()
//{
//    echo PHP_VERSION;
//}
//
//func();
//--------------------------
//function func1($a)
//{
//    var_dump($a);
//}
//
//func1('a');
//func1(1);
//func1(1.1);
//func1(true);
//
//$b = 1;
//$a = 2;
//func1($b);
//--------------------------
//function func2($a, $b)
//{
//    echo $a + $b.'<br>';
//}
//func2(20, 90);
//func2(10, 80);
//func2(10, 10);
//--------------------------
//$result = substr('qwerty', 1);
//var_dump($result);
//
//$result = substr('qwerty', 1, 3);
//var_dump($result);
//function func3($a, $b, $c=true)
//{
//    if ($c) {
//        var_dump($a * $b);
//    } else {
//        var_dump($a - $b);
//    }
//}
//func3(4,2);
//func3(4,2, true);

// не правильный пример
//function func3($a = 1, $b, $c = true)
//{
//    if ($c) {
//        var_dump($a * $b);
//    } else {
//        var_dump($a - $b);
//    }
//}
//--------------------------
//function func4()
//{
//    function subfunc($a, $b)
//    {
//        if ($b != 0) {
//            return round($a / $b, 4);
//        } else {
//            return $a;
//        }
//    }
//
//    $a = [1,2,3,4,5,6,7];
//    $b = [10,20];
//
//    for ($i=0; $i<count($a); $i++) {
//        for ($j=0; $j<count($b); $j++) {
//            var_dump(subfunc($a[$i], $b[$j]));
//        }
//    }
//}
//
//func4();
//echo '<br>subfunc<br>';
//var_dump(subfunc(10, 3));
//--------------------------
//function func6(&$c, $d)
//{
//    $c = $c * 100;
//    $d = $d * 100;
//}
//$a = 1;
//$b = 2;
//
//func6($a, $b);
//
//var_dump($a);
//var_dump($b);

//$a = [8,2,4,7,8,3,1,4,6,8,4];
//var_dump($a);
//sort($a);
//var_dump($a);
//rsort($a);
//var_dump($a);
//--------------------------
//echo max(1, 2, 3, 4, 5, 6, 7, 3, 2, 1, 1, 1, 1);

//function func7(...$letters)
//{
//    $result = '';
//    foreach ($letters as $letter) {
//        $result .= $letter;
//    }
//    return $result;
//}
//echo func7('a', 's', 'k', 'a', 'r');
//--------------------------
//function func8(int $a, string $b, array $c):int
//{
//    var_dump($a);
//    var_dump($b);
//    var_dump($c);
//    return '1';
//}
//
//func8('11', 100, 'fsdfsdf');
//--------------------------
