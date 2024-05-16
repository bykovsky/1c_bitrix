<?
require_once('header.inc.php');
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
<h2>Создание SELECT</h2>
<!-- CODE -->
<select class="form-select">
    <?
        for($i=1980; $i<=date('Y'); $i++) {
            ?>
            <option value="<?=$i?>"><?=$i?></option>
            <?
        }
    ?>
</select>
<!-- //CODE -->
            </div>
        </div>
    </div>
</section>




<hr>
<?
// $a = mt_rand(PHP_INT_MIN, PHP_INT_MAX);
// $b = mt_rand(PHP_INT_MIN, PHP_INT_MAX);
// $c = mt_rand(PHP_INT_MIN, PHP_INT_MAX);
// $x = mt_rand(PHP_INT_MIN, PHP_INT_MAX);

$a = mt_rand(-1000, 1000);
$b = mt_rand(-1000, 1000);
$c = mt_rand(-1000, 1000);
$x = mt_rand(-1000, 1000);

$d = $b^2 - 4 * $a * $c;
?>
<h2>Решение квадратного уравнения</h2>
<pre>
    <h4>Данные:</h4>
    <div>переменная a: <strong><?=$a?></strong></div>
    <div>переменная b: <strong><?=$b?></strong></div>
    <div>переменная c: <strong><?=$c?></strong></div>
    <div>переменная x: <strong><?=$x?></strong></div>
</pre>
<h3>Вывод через IF</h3>
<?
if ($d > 0){
    echo ('корень №1 = '.round($x1 = (-$b + sqrt($d)) / (2 * $a), 2)).'<br>';
    echo ('корень №2 = '.round($x2 = (-$b - sqrt($d)) / (2 * $a), 2));
} elseif ($d < 0) {
    echo "нет корней";
} else {
    echo ('корень = '.$x = (-$b + sqrt($d)) / (2 * $a));
}

?>
<h3>Вывод через SWITCH</h3>
<?

switch ($d) {
    case 0:
        echo ('корень = '.round($x = (-$b + sqrt($d)) / (2 * $a), 2));
        break;
    case ($d > 0):
        echo ('корень №1 = '.round($x1 = (-$b + sqrt($d)) / (2 * $a), 2)).'<br>';
        echo ('корень №2 = '.round($x2 = (-$b - sqrt($d)) / (2 * $a), 2));
        break;
    case ($d < 0):
        echo "нет корней";
        break;
}
?>
<hr>
<h2>СЛАЙД 23</h2>
<h4>Задача №1</h4>
<p>Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки.</p>
<?
$i = 1;
while($i <= 30) {
    if ($i++%2) {
        echo $i++.'<br>';
    }
}
?>
<h4>Задача №2</h4>
<p>Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3. Числа, одновременно кратные 3 и 5, сделать жирным</p>
<?
$i = 1;
$edge = 50;
$nums = range(1,50);
echo '<table border="1">';
foreach($nums as $key => $value) {
    if($value % 3 == 0 && $value % 5 == 0) {
        echo '<tr><td>Значение кратно 3 и 5</td><td><i>'.$value.'</i></td></tr>';
    } elseif($value %3 == 0) {
        echo '<tr><td>Значение кратно 3</td><td><strong>'.$value.'</strong></td></tr>';
    } else {
        echo '<tr><td> </td><td>'.$value.'</td></tr>';
    }
}
echo '</table>';
?>

<h4>Задача №4</h4>
<p>Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ... Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10? </p>
<?
$s = 0;
$i = 0;
$a = 1;
$b = 1;

while ($s < 10) {
    $s += $a/$b;
    $a += 3;
    $b += 1;
    echo $s.'<br>';
    $i++;
}
echo "Минимальное количесвто элементов ".$i;
?>


<h2>СЛАЙД №25</h2>
<h3>Задача №1</h3>
<p>Выведите столбец чисел от 5 до 13.</p>
<?
$num = 5;
$edge = 13;
?>
<h4>Цикл WHILE</h4>
<?
while ($num <= $edge) {
    echo $num++.'<br>';
}
?>
<h4>Цикл FOR</h4>
<?
for ($num=5; $num<=13; $num++) {
    echo $num.'<br>';
}
?>


<?
require_once('footer.inc.php');
?>
