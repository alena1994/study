<?php 

$i = 0;
for ($i == 1; $i < 5; $i++) {
    echo $i . "<br>";
}

$mas = [1, 2, 3,];
foreach ($mas as $key => $val) {
    echo $key . "-" . $val . "<br";
}

$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}

$i = 0;
do {
    $i++;
} while ($i < 10);

$i = 0;
if ($i < 4) {
echo $i;
} elseif ($i > 5) {
    echo $i;
} else {
    echo "no";
}

switch ($i) {
    case 0: 
        echo $i;
        break;
	case 1:
	    echo $i;
		break;
	default: 
	    echo "no";
}

function funSunThe ()
{
    $i = 1 + 5;
}

class ClassName 
{
public $a;
private $b;
public $l = 1;
public $k = 5;


function funTheThe ($c, $s) 
{
    $i = mod($c, $s);
}

function funSub ($d)
{
	$mul1 = 0;
	$mul2 = 0;
    for ($i = 0; $i <= 2; $i++) {
	    $mul1 = $mul1 + $d[$i];
	}
	for ($i = 3; $i <= 6; $i++) {
	    $mul2 = $mul2 + $d[$i];  
	}
    if ($mul1 == $mul2) {
	echo " lucky ticket";
	}		
}
}

$ob = new ClassName();

echo $ob->funTheThe(2, 5);
echo $ob->funSub(258964);

echo $ob->$l;
echo $ob->$k;

echo $ob->$a = 45;
echo $ob->$k = 85;

