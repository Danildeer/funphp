<h1 id="col">

 <?php echo "Club Boys";?>
</h1>

<?php
//define("PI","3,14");
//echo PI;

$a= 15;

$c = $a++;

$e = 11;

$d = ++$e;

echo "<br/>";
echo "a=$a";
echo "<br/>";
echo "c=$c";
echo "<br/>";
echo "d=$d";

echo "<br/>";
echo "e=".$e;

//$f = $a ** $b;

echo "<br/>";
echo "f=".$f;

$e1 = 3;
$d1 = 2;

if ($e1 == $d1)
{
echo "<br/>";
echo "<h1>Истино</h1>";
}
else {
echo "<br/>";
echo "<h1>Ложно</h1>";
}
$e2 = "str";
$d2 = "str";

if ($e2 == $d2)
{
echo "<br/>";
echo "<h1>Истино</h1>";
}

$e3 = 5;
$d3 = 5;

if ($a3 > $b3) {
echo "a больше, чем b";
} elseif ($a3 == $b3) {
echo "a равен b";
} else {
echo "a меньше, чем b";
}
?>

<?php
$a = '4';
if ($a == 4): ?>

<h1 id="col">Welcome to the club!</h1>
<?php endif; ?> 


<?php
$a = 6;
if ($a == 2):
    echo "a равно 2";

elseif ($a == 5):
    echo "a равно 5";

else:
    echo "a не равно ни 5 ни 6";
endif;
echo "<br/>";
?>
<?php
$i = 5;
while ($i <= 10) {
echo "<br/>";
echo $i++;
}
?>


<?php

echo "<br/>";
echo "======This is FOR======";
for ($i = 1; $i <= 15; $i++) {
echo "<br/>";
echo $i;
}
?>

<?php
echo "<br/>";
echo "======This is DO WHILE======";
$i = 1;
do {
echo "<br/>";
echo $i;
$i++;
} while ($i <= 10);

?>

<?php
$arr = array(1,2,3,4,5,6,7,8,9,10);
echo "<br/>";
echo "======This is foreach======";
foreach ($arr as &$value) {
echo "<br/>";
echo $value;
}
?>

<?php
$i = 1;
while ($i<= 10) {?>
<h1>Числа=</h1>
<?php echo $i;?>

<?php
$i++;
}?>

<?php
$arr = array(2,3,6,34,11,24);
echo "<br/>";
echo "======This is foreach======";
foreach ($arr as &$value) {
echo "<br/>";
echo $value;
echo "<br/>";
}
?>

 <h1>Задание1</h1>
<?php 
$arr = array(41,22,46,7,0,-2,-3,41,0,0,-17,-1);
$val = $arr[0];
$n = count($arr);
for($i=1;$i<$n;$i++) {
if($val<$arr[$i]) {
    $val = $val;        
} else {
    $val = $arr[$i];
}
}
print($val)."".'= min';
echo "<br/>";

$arr = array(41,22,46,7,0,-2,-3,41,0,0,-17,-1);
$val = $arr[0];
$n = count($arr);
for($i=1;$i<$n;$i++) {
if($val>$arr[$i]) {
    $val = $val;        
} 
 
 else {
    $val = $arr[$i];
}
}
print($val)."".'= max';


 ?> 
<h1>Задание</h1>
 <?php

 echo "<br/>";
$arr = array(41,22,46,7,0,-2,-3,41,0,-17,-1);
for($i=0;$i<=10;$i++){
	$a = $arr[$i];
for($j=$i+1;$j<=9;$j++){
	$ch=$arr[$j];
if($a==$ch){
	echo $a;
	echo '</br>';
};
};
};

  ?>					

 <?php 
$arr = array(41,22,46,7,0,-2,-3,41,0,-17,-1);
$s = 0;
for($i=1;$i<=$arr;$i++){
	if ($arr[i]>=0) {
		$s=$s+$arr[i];
		echo $s;

};
};
 ?> 

 <?php 

$sum=0;
for ($i=0; $i<8; $i++) {
    for ($j=0; $j<7; $j++) {
        $mas[$i][$j] = rand (15, 35);
        echo $mas[$i][$j]." ";


        if ($i==2){
            $sum=$sum+$mas[$i][$j]; 
            
            

    }


            
    }
    echo "<br/>";

}
    echo $sum;

 ?> 


<?php 
echo "<br/>";
function yraw($a, $b, $c){

    $d=pow($b,2)-4*$a*$c;
    echo $d;
    echo "<br/>";

    if($d>0) {
    $x1 = (-$b+sqrt($d))/2*$a;
    echo $x1;
    $x2 = (-$b-sqrt($d))/2*$a;
    echo $x2;
    
    }
    elseif($d==0) {
    
    $x=(-$d)/2*$a;
    echo $x;
    }
    else{
    echo "Корней нет ";

}
}

echo yraw(1, 5, 6);
echo "<br/>";



 ?> 


 <form action="index.php" method="POST">
        Lupa: <input type="text" name="Lupa" /> <br><br>
        pupa: <input type="number" name="pupa" /> <br><br>
            <input type="submit" value="Отправить" name="smb">
    </form>
<?php  
if(isset($_POST['Lupa'])) $Lupa = $_POST['Lupa'];
if(isset($_POST['pupa'])) $pupa = $_POST['pupa'];
?>



 
 <?php 
    $host = '127.0.0.1';
    $db   = 'test3';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    $stmt = $pdo->query('SELECT secondname FROM tab');
while ($row = $stmt->fetch())
{
    echo $row['secondname'] . "\n";
    
}

$Lupa = 'asdf';
$pupa = 20;

   
    $sql = "INSERT INTO tab2 (Lupa,pupa) VALUES (:Lupa,:pupa)";
    $stm = $pdo->prepare($sql);
    $stm->execute(array(':Lupa'=>$Lupa,
                        ':pupa'=>$pupa));

    $fulld = 'asd';

    $data = $pdo->prepare('DELETE FROM tab2 WHERE Lupa = :Lupa');
    $data->bindParam(':Lupa', $fulld);
    $data->execute();
    echo $data->rowCount();
  ?>

