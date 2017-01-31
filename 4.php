<?php

namespace study;

include '5.php';

echo $i;

class ClassName
{
    public $a = 10;
    private $b;
    const CONSTANTA1 = 5;
    const CONSTANTA2 = 8;

    public function theThe($the)
    {
        echo ($the == 10) ? $the : 'no';
    }

    public function reWr($a)
    {
        echo ($a == 5)
        ? 'a равно 5'
        : ($a == 6)
            ? 'a = 6'
            : ' a != 5, 6';
    }
}

$i = 0;
for (; ;):
    if ($i > 10) {
        break;
    }
    echo $i;
    $i += 2;
endfor;

while ($i < 20):
    echo $i;
    $i++;
endwhile;

$mas = [
    'fruts' => [
        'apple',
        'orange',
        ],
    'vegatebles' => [
        'onion',
        'tomato',
        'potatos',
        ],
        ];
foreach ($mas as $group => $category):
    echo $group.': ';
    foreach ($category as $key => $val):
        echo $val.', ';
    endforeach;
endforeach;

switch ($i):
    case 0: echo '0';
        break;
    case 30: echo '30';
        break;
    default:
        echo 'no';
endswitch;

function hrTg($val)
{
    echo ((mod($val, 2)) == 0)
    ? 'yes'
    : 'no';
}

echo htTg(25);
$rrr = new ClassName();
echo $rrr->theThe(10);
echo $rrr->reWr(5);
echo $rrr->theThe(4);
echo $rrr->reWr(6);
echo $rrr->reWr(7);
echo $rrr->a;
echo ClassName::CONSTANTA1;
echo ClassName::CONSTANTA2;
