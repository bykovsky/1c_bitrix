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
              <h2>Массивы</h2>
<!-- CODE -->
<?
$arr = array('сок', 'суп', 'шашлык');
$arr[] = 'яблоко';
$arr[] = 'кофе';
$arr[] = 'груша';
$arr[] = 'помидор';
print_r($arr);

echo '<hr>';

for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i].'<br>';
}

// определим переменную-массив из трех значений
// максимальный индекс - 2
$fav_movies = ["Собачье сердце", "Полет над гнездом кукушки", "Тот самый Мюнхгаузен"];

// добавим элемент в массив, но на позицию 5
$fav_movies[] = "Человек с бульвара Капуцинов";

$count = count($fav_movies);

$i = 0;
while ($i < $count){
    echo "--" . $fav_movies[$i] . "<br>";
    $i++;
}
//echo "<pre>";
//print_r($fav_movies);
?>
<hr>
<?
// $user = [];

// $user["name"] = "Татьяна";
// $user["surname"] = "M.";
// $user["age"] = 31;
// $user["email"] = "tat.M@gmail.com";
// $user["job"] = "Менеджер";
// $user["experience"] = 5;
// $user["children"] = 1;

// echo "<pre>";
// print_r($user);
// echo "</pre>";
// так будет работать,
// только непонятно, зачем смешивать индексный и ассоциативный массивы
//$user[1] = "г. Москва";
//$user[] = "Драники";

// так работать не будет
//echo "<h3>Hi, Miss $user['name']  $user['surname'], вот твои личные данные:</h3>";
//echo "<pre>";
//print_r($user);

// a так будет
// echo "<h3>Hi, Miss {$user['name']}  {$user['surname']}, вот твои личные данные:</h3>";
// echo "<pre>";
// print_r($user);

// так тоже будет
// echo "<h3>Hi, Miss $user[name]  $user[surname], вот твои личные данные:</h3>";
// echo "<pre>";
// print_r($user);

$arr7 = [
  'fruits' => [
    'apple' => 'яблоко',
    'banana' => 'банан',
    'pineapple' => 'ананас'
  ],
  'vegetables' => [
    'carrot' => 'морковь',
    'tomato' => 'помидор'
  ],
  'drinks' => [
    'water' => 'вода',
    'tea' => 'чай',
    'coffee' => 'кофе'
  ]
];

// echo '<pre>';
// print_r($arr7);
// echo '<pre>';

foreach ($arr7 as $key => $value) {
  if($key == 'fruits') {
    foreach ($value as $k => $items) {
      echo $items.'<br>';
    }
  }
}

$array = [50, 45, 40, 35, 30];
$result = 0;
foreach ($array as $key => $value) {
  $result += $value;
}
echo $result;

?>
<hr>
<?

// $arr = range(0,10);
// shuffle($arr);

// foreach ($arr as $value) {
//   echo $value.'<br>';
// }
// echo '<hr>';
// foreach (array_reverse($arr) as $value) {
//   echo $value.'<br>';
// }
// echo '<hr>';

$arr = array();
$limit = 10;
for ($i = 0; $i < $limit; $i++){
  $arr[$i] = mt_rand(0, $limit);
}
foreach ($arr as $value) {
  echo $value.'<br>';
}

echo '<hr>';

for ($i=count($arr)-1; $i>=0; $i--){
  echo $arr[$i].'<br>';
}
// echo '<pre>';
// print_r($arr);
// echo '</pre>';

// echo '<pre>';
// print_r($arr);
// print_r(array_reverse($arr));
// echo '</pre>';

echo '<hr>';


$images = ['1.png',
            '2.png',
            '3.png',
            '4.png',
            '5.png',
            '6.png',
            '7.png',
            '8.png',
            '9.png',
            '10.png'
          ];
$current = mt_rand(1, count($images) - 1);
echo '<img src='.$images[$current].' alt="'.$images[$current].'">';

echo '<hr>';

$range = array();
$negative = -100;
$positive = 100;
$limit = 5;
$max = 101;
$min = -101;

for ($i = 0; $i <= $limit; $i++) {
  $range[$i] = mt_rand($negative, $positive);
}

for ($i = 0; $i < count($range); $i++) {
  echo $range[$i].'<br>';

  if($range[$i] > 0 && $range[$i] < $max) {
    $max = $range[$i];
  }
  if ($range[$i] < 0 && $range[$i] > $min) {
    $min = $range[$i];
  }
}

echo '<hr>';
echo $max;
echo '<hr>';
echo $min;
echo '<hr>';
// for ($i = 0; $i < count($range); $i++) {
//   echo $arr[$i].'<br>';
// }


$marks = [
  ['math' => 5, 'phisics' => 4, 'chem' => 3, 'informatics' => 5],
  ['math' => 4, 'phisics' => 3, 'chem' => 4, 'informatics' => 4],
  ['math' => 3, 'phisics' => 4, 'chem' => 5, 'informatics' => 5],
  ['math' => 5, 'phisics' => 5, 'chem' => 3, 'informatics' => 4]
];
$sums = ['math' => 0, 'phisics' => 0, 'chem' => 0, 'informatics' => 0];
$count = ['math' => 0, 'phisics' => 0, 'chem' => 0, 'informatics' => 0];

foreach ($marks as $mark) {
  foreach ($mark as $subject => $value){
    $sums[$subject] += $value;
    $count[$subject] ++;
  }
}
$average = [];
foreach ($sums as $subject => $sum){
  $average[$subject] = $sum / $count[$subject];
}
foreach ($average as $subject => $avg){
  echo "$subject : $avg <br>";
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
