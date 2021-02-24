<form action="Lab_1.php" method="get">
	d1: <input type="text" name="d1"><br>
	d2: <input type="text" name="d2"><br>
	Возраст: <input type="text" name="age"><br>
	Пол: <br>
	Мужской: <input type="radio" name="pol" value="М"><br>
	Женский: <input type="radio" name="pol" value="Ж"><br>
	Число: <input type="text" name="chislo"><br>
	<input type="submit" name="submit" value="Отправить">
</form>
<?php
$d1=$_REQUEST['d1'];
$d2=$_REQUEST['d2'];
$S=1/2*$d1*$d2;
echo "1)Формалуа площади ромба: S = 1/2 * d1 * d2<br>";
echo "Площадь ромба: 1/2*$d1*$d2 = $S<br>";

echo "2-5)";
$age=$_REQUEST['age'];
if ($age < 0 || !is_numeric($age)) {
	echo "Неизвестный возраст<br>";
}
elseif ($age >= 18 && ($age <= 59)) {
	echo "Вам еще работать и работать<br>";
}
elseif ($age > 59) {
	echo "Вам пора на пенсию<br>";
}
elseif ($age >= 0 && ($age <= 17)) {
	echo "Вам еще рано работать<br>";
}

echo "6)";
$pol=$_REQUEST['pol'];
switch ($pol) {
	case 'М':
		if ($age < 0 || !is_numeric($age)) {
			echo "Неизвестный возраст<br>";
		}
		elseif ($age >= 18 && ($age <= 64)) {
			echo "Вам еще работать и работать<br>";
		}
		elseif ($age > 64) {
			echo "Вам пора на пенсию<br>";
		}
		elseif ($age >= 0 && ($age <= 17)) {
			echo "Вам еще рано работать<br>";
		}
		break;
	case 'Ж':
		if ($age < 0 || !is_numeric($age)) {
			echo "Неизвестный возраст<br>";
		}
		elseif ($age >= 18 && ($age <= 59)) {
			echo "Вам еще работать и работать<br>";
		}
		elseif ($age > 59) {
			echo "Вам пора на пенсию<br>";
		}
		elseif ($age >= 0 && ($age <= 17)) {
			echo "Вам еще рано работать<br>";
		}
		break;
}

echo "7)";
$a = '78';
$b = 78;
if ($a === $b) {
	echo "А и B эквивалентны<br>";
}
else echo "A и B не эквивалентны<br>";

echo "8)";
for ($i=11; $i < 34 ; $i++) {
	echo "$i ";
}

echo "<br>9)<br>";
for ($i=1; $i < 21 ; $i++) {
	for ($j=0; $j < $i ; $j++)
		echo "x";
	echo "<br>";
}

echo "10)";
for ($i=35; $i < 88 ; $i++) {
	if ($i % 7 == 1 or $i % 7 == 2 or $i % 7 == 5) {
		echo "$i ";
	}
}

echo "<br>11)";
$c=$_REQUEST['chislo'];
for($i=$c;$i>0;$i/=10)
	$h+=$i%10;
echo "$h<br>";

echo "12)<br>";
for ($i=2; $i < 10 ; $i++) {
	for ($j=2; $j < 10 ; $j++) {
		$d=$i*$j;
		echo "$d ";
	}
	echo "<br>";
}
?>