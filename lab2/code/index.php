<?php
//1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

$order=& $very_bad_unclear_name;
$order=$order . ', barbecue sauce';
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

//2
$var1 = 4;
echo $var;

$var2 = 8;
echo nl2br("\n". $var2);

$var3 = 0.1;
echo nl2br("\n" . $var3);

$var4 = 9+3;
echo nl2br("\n" . $var4);

$last_month = 1187.23;
$this_month = 1089.98;
echo nl2br("\n" . ($last_month-$this_month));

//3
$num_languages = 4;
$months = 11;
$days = $months*16;
$days_per_language = $days/$num_languages;
echo nl2br("\n" . $days_per_language);

//4
echo nl2br("\n" . 8 ** 2);

//5
$my_num = 4;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo nl2br("\n" . $answer);

//6
$a=10;
$b=3;
echo nl2br("\n" . ($a % $b));

$a=15;
$b=3;
$dif = $a % $b;
if ($dif === 0) {
    echo nl2br("\n" .'Делится');
} else {
    echo nl2br("\n" .'Делится с остатком ' . $dif);
}

$st = pow(2,10);

echo nl2br("\n" . sqrt(245));

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $item) {
    $sum += pow($item,2);
}
echo nl2br("\n" . sqrt($sum));

echo nl2br("\n" . round(sqrt(379)) ." " . round(sqrt(379),1) ." ". round(sqrt(379),2));

$asArr = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];

$arr = [4, -2, 5, 19, -130, 0, 10];
echo nl2br("\n" . min($arr));
echo nl2br("\n" . max($arr));

echo nl2br("\n" .rand(1, 100));

$randArr = [];
for ($i = 0; $i < 10; $i++) {
    $randArr[$i] = rand();
}
echo '<pre>';
print_r($randArr);
echo '</pre>';

$a=-100;
$b=33;
echo nl2br("\n" .abs($a - $b));

$arr2 =  [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($arr2); $i++) {
    if ($arr2[$i] < 0)
    $arr2[$i] = -1 * $arr2[$i];
}
echo '<pre>';
print_r($arr2);
echo '</pre>';

$a = 30;
$divArr = [];
for ($i = 1; $i <= ($num); $i++) {
    if ($num % $i === 0)
        $divArr[] = $i;
}
echo '<pre>';
print_r($divArr);
echo '</pre>';

$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$i = 0;
while ($sum < 10) {
    $sum += $arr3[$i];
    $i++;
}
echo nl2br("\n"  . $i);

//7
function printStringReturnNumber(string $i): int
{
    echo nl2br("\n"  .$i);
    return (int)$i;
}

$my_num = printStringReturnNumber('100');
echo nl2br("\n"  . $my_num);

//8
function increaseEnthusiasm(string $str): string
{
    return $str . '!';
}
echo nl2br("\n"  . increaseEnthusiasm('myaw myaw'));

function repeatThreeTimes(string $str): string
{
    return $str . $str . $str;
}
echo nl2br("\n"  . repeatThreeTimes('myaw myaw'));

echo nl2br("\n"  . increaseEnthusiasm(repeatThreeTimes('mrrr')));

function cut(string $str, int $num = 10): string
{
    return substr($str, 0, $num);
}

function printArr(array $arr, int $i = 0): void
{
    if ($i < count($arr)) {
        echo nl2br("\n"  . $arr[$i]);
        printArr($arr, $i + 1);
    }
}

function summ(int $num): int
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    if ($sum > 9)
        return summ($sum);
    return $sum;
}

//9
$arr = []; 
for ($i = 0; $i < 20; $i++) {
    $arr[$i] = '';
    for ($j = 0; $j <= $i; $j++) {
        $arr[$i] .= 'x';
    }
}
printArr($arr);

function arrayFill(string $str, int $num): array
{
    $arr = [];
    for ($i = 0; $i < $num; $i++) {
        $arr[$i] = $str;
    }
    return $arr;
}
printArr(arrayFill('x', 5));

function sumOfArr(array $arr): int
{
    $sum = 0;
    foreach ($arr as $item) {
        if (is_array($item))
            $sum += sumOfArr($item);
        else
            $sum += $item;
    }
    return $sum;
}
$arr = [[1, 2, 3], [4, 5], [6]];
echo nl2br("\n"  . sumOfArr($arr));

$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr[$i][$j] = $i * 3 + $j + 1;
    }
}
echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = [2, 5, 3, 9];
$res = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo nl2br("\n"  . $res);

$user = ['name' => 'Kristina', 'surname' => 'Kurasova', 'patronymic' => 'Sergeevna'];
echo nl2br("\n"  . $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']);

$date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')];
echo nl2br("\n"  . $date['year'] . '-' . $date['month'] . '-' . $date['day']);

$arr = ['a', 'b', 'c', 'd', 'e'];
echo nl2br("\n"  . count($arr));

echo nl2br("\n"  . $arr[count($arr) - 1]);
echo nl2br("\n"  . $arr[count($arr) - 2]);

//10
function summ2(int $a, int $b): bool
{
    return $a + $b > 10;
}

function equall(int $a, int $b): bool
{
    return $a === $b;
}

echo $test == 0 ? 'верно' : 'неверно';

$age = 1;
if ($age < 10 || $age > 99)
    echo nl2br("\n"  . 'Число меньше 10 или больше 99');
else {
    $sum = 0;
    while ($age > 0) {
        $sum += $age % 10;
        $age = (int)($age / 10);
    }
    if ($sum <= 9)
        echo nl2br("\n"  . 'Сумма цифр однозначна');
    else
        echo nl2br("\n"  . 'Сумма цифр двузначна');
}

$arr = [1, 1, 1];
if (count($arr) === 3)
    echo nl2br("\n"  . array_sum($arr));

//12
function arithmeticMean(array $arr): float
{
    return array_sum($arr) / count($arr);
}

function sum(int $num): int
{
    return $num === 1 ? 1 : $num + sum($num - 1);
}
echo nl2br("\n"  . sum(100));

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function squareRoots(array $arr): array
{
    return array_map(function ($item) {
        return sqrt($item);
    }, $arr);
}
printArr(squareRoots($arr));

$arr = array_fill_keys(range('a', 'z'), 0);
foreach ($arr as $key => $value) {
    $arr[$key] = ord($key) - 96;
}
echo '<pre>';
print_r($arr);
echo '</pre>';

function sumOfPairs(string $str): int
{
    return array_sum(str_split($str, 2));
}
echo nl2br("\n"  . sumOfPairs('1234567890'));
?>