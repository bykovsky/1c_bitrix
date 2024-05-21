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
              <h2>Строки</h2>
<!-- CODE -->
<?
$str = "HELLO";
$arr = [mb_substr($str, 0, 3), mb_substr($str, -2, 3)];

$arr2 = [mb_substr($str, 0, 2), mb_substr($str, -3, 4)];
print_r($arr2);
echo '<hr>';

$fact = 'fact';
echo ucfirst($fact);

$user = "Фамилия Имя Отчество";
$user_names = explode(" ", $user);
print_r($user_names);
echo '<hr>';

$correct_user = implode(" ", array($user_names[1], $user_names[0]));
print_r($correct_user);
echo '<hr>';

$hello = 'Привет, мир!';
echo mb_substr_count($hello, 'и');
echo '<hr>';

$phrase  = 'html css php';
echo mb_substr($phrase, 0, 4).', ';
echo mb_substr($phrase, 5, 3).', ';
echo mb_substr($phrase, -3, 3);
echo '<hr>';

$img = 'file.png';
if ($ext = mb_substr($img, -4, 4) == '.png') {
  echo 'да';
} else {
  echo 'нет';
}

echo '<hr>';

$string = 'chemistry';
if (mb_strlen($string) > 5) {
  echo mb_substr($string, 5).'...';
} else {
  echo $string;
}

echo '<hr>';

$to_raplace = "any books are cool";
echo str_ireplace(array("a", "b", "c"), array("1", "2", "3"), $to_raplace);
echo '<hr>';

$stack = 'abc abc abc';
echo strripos($stack, 'b');
echo '<hr>';

$text = 'html css php';
print_r(explode(" ", $text));
echo '<hr>';


$date = '10-05-2024';
$now = time();
$days = $now - strtotime($date);
echo floor($days / (60 * 60 * 24));
//output 10
echo '<hr>';

$vowels = array('а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я');
$consonants = array('б', 'в', 'г', 'д', 'ж', 'з', 'й', 'к', 'л', 'м', 'н', 'п', 'р', 'с', 'т', 'ф', 'х', 'ц', 'ч', 'ш', 'щ');

$vowels_count = 0;
$consonants_count = 0;

$str = 'строка в которой искать количество букв гласных и согласных';
foreach($vowels as $char){
  if(in_array($char, $vowels)){
    $vowels_count++;
  }
}

foreach($consonants as $char){
  if(in_array($char, $consonants)){
    $consonants_count++;
  }
}
echo 'Фраза: '.$str.'<br>';
echo 'Количество гласных в строке равно: '.$vowels_count.'<br>';
echo 'Количество согласных в строке равно: '.$consonants_count.'<br>';

echo 'Количество слов в предложении равно: '.count(explode(" ", $str)).'<br>';

?>
<!-- //CODE -->
            </div>
        </div>
    </div>
</section>

<?
require_once('inc/footer.inc.php');
?>
