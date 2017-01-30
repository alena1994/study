<?php

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

$mas = [1, 5, 6, 7, 1];
foreach ($mas as $key => $val) {
    echo $key.'-'.$val.'<br>';
}

$k = 0;
while ($k < 6) {
    $k++;
    echo $k;
}

$s = 1;
$res = 2;
do {
    $res = pow($res, $s);
    echo $res;
    $res++;
} while ($s < 5);

if ($f == 2) {
    echo '2';
} elseif ($f == '5') {
    echo '5';
} else {
    echo $f;
}
switch ($t) {
    case 0: 
        echo '0';
    case 1:
        echo '1';
    default:
        echo 'no';
}

$k = 0;
