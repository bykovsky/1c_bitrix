<?
require_once('inc/header.inc.php');
?>

<?
/*
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <!-- CODE -->
              <!-- //CODE -->
            </div>
        </div>
    </div>
</section>
*/
?>

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


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <h2>Решение квадратного уравнения</h2>
<!-- CODE -->
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
<div class="input-data">
  <h4>Данные:</h4>
  <div>переменная a: <strong><?=$a?></strong></div>
  <div>переменная b: <strong><?=$b?></strong></div>
  <div>переменная c: <strong><?=$c?></strong></div>
  <div>переменная x: <strong><?=$x?></strong></div>
</div>
<div class="row">
  <div class="col-md-6">
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
  </div>
  <div class="col-md-6">
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
  </div>
</div>
<!-- //CODE -->
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <!-- CODE -->
              <h2>СЛАЙД 23</h2>
<h4>Задача №1</h4>
<p class="task">Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки.</p>
<?
$i = 1;
while($i <= 30) {
  if ($i++%2) {
    echo $i++.'<br>';
  }
}
?>
<h4>Задача №2</h4>
<p class="task">Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3. Числа, одновременно кратные 3 и 5, сделать жирным</p>
<?
$i = 1;
$edge = 50;
$nums = range(1,50);
echo '<table class="table">';
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
<p class="task">Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ... Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10? </p>
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
              <!-- //CODE -->
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <!-- CODE -->
<h2>СЛАЙД №25</h2>
<h3>Задача №1</h3>
<p class="task">Выведите столбец чисел от 5 до 13.</p>
<?
$num = 5;
$edge = 13;
?>
<div class="row">
  <div class="col-md-6">
<h4>Цикл WHILE</h4>
<?
while ($num <= $edge) {
  echo $num++.'<br>';
}
?>
  </div>

  <div class="col-md-6">
<h4>Цикл FOR</h4>
<?
for ($num=5; $num<=13; $num++) {
  echo $num.'<br>';
}
?>
  </div>
</div>

<h3>Задача №2</h3>
<p class="task">Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</p>
<div class="row">
  <div class="col-md-6">
    <h4>Цикл WHILE</h4>
<?
$num = 1000;
$s = 0;
while ($num > 50) {
  $num = $num/2;
  if ($num > 50) {
    echo $num.'<br>';
    $s++;
  }
}
echo 'количество итераций - '.$s;
?>
  </div>
  <div class="col-md-6">
    <h4>Цикл FOR</h4>
<?
$num = 1000;
$i = 0;
for($num; $num > 50; $i++) {
  $num = $num/2;
  if ($num > 50) {
    echo $num.'<br>';
  }
}
echo 'количество итераций - '.$i;
?>
  </div>
</div>

<h3>Задача №3</h3>
<p class="task">Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10. </p>
<?
$i = range(0,10);
$range = 10;
foreach($i as $key => $value) {
  if ($value <= $range) {
    $limit = $range - $value;
    ?>
    <div>
    <?
    for ($i=0; $i <= $limit; $i++) {
      echo $i.',';
    }
    ?>
    </div>
    <?
  }
}
?>
<!-- //CODE -->
            </div>
        </div>
    </div>
</section>

<?
require_once('inc/footer.inc.php');
?>
