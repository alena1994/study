<?php
/*
namespace bitrix\admin;

use bitrix\admin as neadmin;

include 1.php;
*/

for ($i = 0; $i < 5; $i++) {
    echo $i.'<br>';
}
echo '<br>';

$mas = [1, 5, 6, 7];
foreach ($mas as $key => $val) {
    echo $key.'-'.$val.'<br>';
}
echo '<br>';

$k = 0;
while ($k < 5) {
    echo $k.'<br>';
    $k++;
}
echo '<br>';

$k = 0;
do {
    echo $k.'<br>';
    $k++;
} while ($k < 5);
echo '<br>';

$f = 1;
switch ($f) {
    case 0:
        echo $f;
		break;
    case 1:
        echo $f;
		break;
    default:
        echo 'no';
}
echo '<br>';
echo '<br>';

$h = 0;
if ($h == 0) {
    echo '0';
} elseif ($h == 5) {
    echo '5';
} else {
    echo $h;
}
echo '<br>';
echo '<br>';

function funThe($a, $b)
{
    if (is_int($a) and is_string($b)) {
        $sum = $a + $b;
    } elseif (is_string($a) and is_int($b)) {
        $sum = (int) $a + (string) $b;
    } elseif (is_string($a) and is_string($a)) {
        $sum = (int) $a + (int) $b;
    } elseif (is_int($a) and is_int($a)) {
        $sum = (string) $a + (string) $b;
    }

    return ($sum).'<br>';
}

function funPlus($a, $b)
{
    return intval($a) + strval($b);
}

class ClassName
{
    public $a;
    private $b = 7;
    const L = 4;
    //const l = 10;

    public function funTheThe()
    {
        return 4 * 9;
    }

    public function funDoDo($rr, $ff)
    {
        return pow($rr, $ff);
    }
	
	public function getB()
    {
        return $this->b;
    }
}

echo funThe('1', 5);
echo funThe(1, '5');
echo funThe('1', '5');
echo funThe(1, 5);
echo funPlus('1', 5);
echo funPlus(1, '5');
echo funPlus('1', '5');
echo funPlus(1, 5);
echo '<br>';
$yy = new ClassName();
$yy->a = 4;
echo $yy->a;
echo $yy->getB();
//$yy->showConstant();
echo ClassName::L;
echo $yy->funTheThe();
echo $yy->funDoDo(2, 4);
