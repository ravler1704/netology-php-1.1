<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Числа Фибоначчи</title>
        <meta charset="utf-8">
    </head>
<body>
<h1>Числа Фибоначчи</h1>
<?php
Error_reporting (E_ALL);
$u = rand (0, 100);
$x = 1;
$y = 1;
$z = "не задано";
echo "Задуманное число " . $u;
echo "</br>";
while ($x <= $u)
{
	if ($x === $u)
	{
		exit ("Задуманное число входит в числовой ряд");
	}
	if ($x < $u)
	{
		$z = $x;
		$x = $x + $y;
		$y = $z;
	}
}
echo "Задуманное число НЕ входит в числовой ряд";
?>
</body>
</html>
