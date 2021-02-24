<form action="Lab_2.php" method="get">
	N: <input type="text" name="n"><br>
	<input type="submit" name="submit" value="Отправить" />
</form>
<?php
echo "1)";
$arr1 = array(1,20,15,17,24,35);
foreach ($arr1 as $value) {
	$result+=$value;
}
echo "$result<br>";

echo "2)";
$arr = array('Коля' => '200','Вася' => '300','Петя' => '400' );
foreach ($arr as $key => $value) {
	echo "$key - зарплата $value долларов.<br>";
}

echo "3)";
$n=$_REQUEST['n'];
$arr2 = array();
for ($i=0; $i <= $n; $i++) {
	$arr2[]=pow($i,2);
}
foreach ($arr2 as $value) {
	echo "$value ";
}
echo "<br>";

echo "4)<br>";
$arr = array(2,5,9,15,0,4);
foreach ($arr as $value) {
	if($value > 3 && ($value <10))
		echo "$value<br>";
}

echo "5)<br>";
$arr = array(1,2,3,4,5,6,7,8,9);
foreach ($arr as $value) {
	echo "$value";
	if ($value < 3 || (($value > 3)&&($value < 6)) || (($value > 6)&&($value < 9))) {
		echo ",";
	}
	if ($value == 3 || $value == 6) {
		echo "<br>";
	}
}

echo "<br>7)<br>";
$arr=array();
for ($i=0; $i < $n ; $i++) {
	$arr[]=rand(1,20);
}
foreach ($arr as $key => $value) {
	echo "$value ";
}
echo "<br>";
$min=21;
$max=0;
for ($i=0; $i < $n ; $i++) {
	if ($arr[$i]<$min) {
		$min=$arr[$i];
		$k1=$i;
	}
	if ($arr[$i]>$max) {
		$max=$arr[$i];
		$k2=$i;
	}
}
$temp=$arr[$k1];
$arr[$k1]=$arr[$k2];
$arr[$k2]=$temp;
foreach ($arr as $value) {
	echo "$value ";
}

echo "<br>8)";
$arr=array('Марианская впадина','Уральские горы','Черное море','Красное море','Озеро Байкал','Математические методы','Психология человека','Философия мира','Карибское море','Гора Эверест');
?>
<div>
<?php
foreach ($arr as $value) {
	echo "$value<br>";
}
?>
</div>
<?php
echo "9)";
$arr=array(45,"тест",100);
foreach ($arr as $value) {
	echo "$value ";
}
unset($arr[0]);
array_push($arr, "тест2");
echo "<br>";
foreach ($arr as $value) {
	echo "$value ";
}
?>