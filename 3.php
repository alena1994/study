<?php
/*
namespace bitrix\admin;

use bitrix\admin as neadmin;

include 1.php;
*/

for ($i = 0; $i < 5; $i++) {
    echo $i;
}

$mas = [1, 5, 6, 7];
foreach ($mas as $key => $val) {
    echo $key.'-'.$val.'<br>';
}

$k = 0;
while ($k < 5) {
    echo $k;
    $k++;
}

$k = 0;
do {
    echo $k;
    $k++;
} while ($k < 5);

$f = 1;
switch ($f) {
    case 0:
        echo $f;
    case 1:
        echo $f;
    default:
        echo 'no'; 
}

$h = 0;
if ($h = 0) {
    echo '0';
} elseif ($h = 5) {
    echo '5';
} else {
    echo $h;
}

function funThe($a, $b)
{
    if (is_integer($a) and is_string($b)) {
        $sum = $a + $b;
    } elseif (is_string($a) and is_integer($b)) {
        $sum = (int)$a + (string)$b;
    } elseif (is_string($a) and is_string($a)) {
        $sum = (int)$a + (int)$b;
    } elseif (is_integer($a) and is_integer($a)) {
        $sum = (string)$a + (string)$b;
    }
    return ($sum).'<br>';
}

class ClassName {

    public $a;
    private $b;
    const $c = 4;
    const $l = 10;

    public function funTheThe()
    {
        $fff = 4 * 9;
    }

    public function funDoDo($rr, $ff)
    {
        $res = pow($rr, $ff);
    }
}

echo funThe('1', 5);
echo funThe(1, '5');
echo funThe('1', '5');
echo funThe(1, 5);
$yy = new ClassName;
echo $yy->$a;
echo $yy->$b;
echo $yy->$c;
echo $yy->$l;
echo $yy->funTheThe;
echo $yy->funDoDo;
