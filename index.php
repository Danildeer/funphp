<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$arr = array(41,22,46,-2,-3,41,7,0,-17,-1);
	  $sum = 0;
	for($t=0;$t<=9;$t++){
		if($arr[$t]>0){
			$sum=$sum+$arr[$t];

		};
	};
	echo $sum;
	?>
</body>
</html>


<?php

$a = 9;
$b = -6;
$c = 2;

//вычисляем дискриминант
$D = $b*$b - (4 * $a * $c);


if ($D > 0) {
    $x1 = ($b * (-1) + bcsqrt($D, 3)) / (2 * $a);
    $x2 = ($b * (-1) - bcsqrt($D, 3)) / (2 * $a);
} elseif ($D < 0) {
    echo 'asda';
} else {
    $x1 = -$b / (2 * $a);
    $x2 = -$b / (2 * $a);
}

if (isset($x1)) {
    echo 'asd: ' . $x1 . ' a ' . $x2;
}
