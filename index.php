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
echo getDigitsSum(463);

//task 6
echo "<br> Task 6 <br>";
?>