<?php
//task 1
echo "Task 1 <br>";
function square($a){
    return $a**3 . '<br>';
}
echo square(3);

//task 2
echo "<br> Task 2 <br>";
function sum($a, $b){
    return $a + $b . '<br>';
}
echo sum(2, 7);

//task 3
echo "<br> Task 3 <br>";
function day_of_week($num){
    switch($num){
        case 1:
            return 'Понедельник';
        case 2:
            return 'Вторник';
        case 3:
            return 'Среда';
        case 4:
            return 'Четверг';
        case 5:
            return 'Пятница';
        case 6:
            return 'Суббота';
        case 7:
            return 'Воскресенье';
    }
}
echo day_of_week(6) . '<br>';

//task 4
echo "<br> Task 4 <br>";
function negative($num){
    if ($num < 0){
        return 'true';
    } else{
        return 'false';
    }
}
echo negative(2) . '<br>';

//task 5
echo "<br> Task 5 <br>";
function getDigitsSum($num){
    $str_num = (string) $num;
    $sum = 0;
    for ($i = 0; $i < strlen($str_num); $i++){
        $sum += $str_num[$i];
    }
    return $sum;
}
echo getDigitsSum(463) . '<br>';

//task 6
echo "<br> Task 6 <br>";
for ($y = 1; $y <= 2020; $y++){
    if (getDigitsSum($y) == 13){
        echo $y . ' ';
    }
}

//task 7
echo "<br><br> Task 7 <br>";
function isEven($num){
    if ($num % 2 ==0){
        return 'true';
    } else{
        return 'false';
    }
}
echo isEven(6) . '<br>';
    
//task 8
echo "<br> Task 8 <br>";
function translit($str){
    $from = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я');
    $to = array('a','b','v','g','d','e','e','zh','z','i','i','k','l','m','n','o','p','r','s','t','u','f','kh','cz','ch','sh','shh','','y','','e','yu','ya','A','B','V','G','D','E','E','ZH','Z','I','I','K','L','M','N','O','P','R','S','T','U','F','KH','CZ','CH','SH','SHH','','Y','','E','YU','YA');
    return str_replace($from, $to, $str);
}
echo translit('Это написано на русском') . '<br>';

//task 9
echo "<br> Task 9 <br>";
function plural($num, $one, $two_three_four, $more){
    switch($num){
        case 1:
            return $num . ' ' . $one;
        case ($num >= 2 && $num <= 4):
            return $num . ' ' . $two_three_four;
        case ($num > 4 || $num == 0):
            return $num . ' ' . $more;
    }
}
echo plural(1, 'яблоко', 'яблока', 'яблок') . '<br>';
echo plural(2, 'яблоко', 'яблока', 'яблок') . '<br>';
echo plural(10, 'яблоко', 'яблока', 'яблок') . '<br>';

//task 10
echo "<br> Task 10 <br>";
function recursion($arr){
    echo array_shift($arr);  //извлекает первый элемент массива и возвращает его, сокращая размер массива на один. 
    if (count($arr) != 0){
        return recursion($arr);
    }
}
recursion([1,6,3,8,3,9,3,2,7,3,9]);

//task 11
echo "<br><br> Task 11 <br>";
function big_sum($num){
    $str_num = (string) $num;
    $sum = 0;
    for ($i = 0; $i < strlen($str_num); $i++){
        $sum += $str_num[$i];
    }
    if($sum > 9){
        return big_sum($sum);
    } else{
        return $sum;
    }
}
echo big_sum(93424) . '<br>';

//task 12
echo "<br> Task 12 <br>";
function speed($time_hours, $distance_km){
    $time_seconds = $time_hours * 3600;
    $distance_meters = $distance_km * 1000;

    $speed_kmph = $distance_km / $time_hours;
    $speed_mps = $distance_meters / $time_seconds;

    echo "Скорость в км/ч: $speed_kmph, 
          скорость в м/с: $speed_mps <br>";
}
echo speed(3, 54);

//task 13
// В моём решении задачи не играет роли длина первого слова
echo "<br> Task 13 <br>";
function characterSimilarity($word1, $word2){
    //разбиваю слова на массивы их символов
    $w1_chars = str_split($word1); 
    $w2_chars = str_split($word2);

    //array_intersect — Вычисляет схождение массивов, возвращает массив
    $chars = array_intersect($w1_chars, $w2_chars);
    if (count($chars) === count($w2_chars)){
        echo "Из символов слова $word1 можно составить слово $word2 <br>";
    } else{
        echo "Из символов слова $word1 нельзя составить слово $word2 <br>";
    }
}

characterSimilarity("fear", "ear");
characterSimilarity("toga", "goat");

//task 14
echo "<br> Task 14 <br>";
function palindrome($str){
    $str = str_replace(" ","", $str); //убираю пробелы заменой 
    $str = mb_strtolower($str);  // перевожу строку в нижний регистр

    $arr = str_split($str);  // преобразую строку в массив
    $arr1 = rsort($arr); // сортирую массив в порядке убывания
    echo ($arr == $arr1) ? 
        'Данная фраза палиндром <br>' : 
        'Данная фраза не палиндром <br>';
}
palindrome('Замучен он, но не чумаз');

//task 15 
echo "<br> Task 15 <br>";
$cols = $rows = 9; 
echo '<table border="1">'; 
for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
        echo '<td>' . $tr * $td . '</td>';
    }
    echo '</tr>';
} 
echo '</table>';

//task 16
echo "<br> Task 16 <br>";
function longestWord($str){
    $arr = explode(" ", $str);
    $longest = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        if (strlen($arr[$i]) > strlen($longest)){
            $longest = $arr[$i];
        }
    }
    echo $longest . '<br>';
}
longestWord("В этой строке много разных слов");

//task 17
echo "<br> Task 17 <br>";
function sumOfOnes(){
    $one_count = 0;
    for($num = 1; $num <= 100; $num++){
        $num .= '';
        if(strpos($num, '1') !== false){
            $one_count++;
        } 
    }
    echo $one_count . '<br>';
}
sumOfOnes();

//task 18
echo "<br> Task 18 <br>";
function splitLongString($str, $n){
    for ($i = 0; $i < strlen($str); $i++) { 
        if (strlen($str) > $n) {
            $str = wordwrap($str, $n, '<br>'); // wordwrap переносит строку по указанному количеству символов
        }
    }
    echo $str;
}
splitLongString(
    'Семейство Мора специализировалось на перегонке вин из обратнолетнего винограда. Эти вина, 
    обладающие необыкновенной силой, пользовались большой популярностью у предсказателей, 
    поскольку давали возможность увидеть будущее. Единственная неувязочка заключалась в том, 
    что похмелье наступало утром накануне. Чтобы преодолеть его, ничего не оставалось, кроме как надраться в доску.', 
    75
);
?>
