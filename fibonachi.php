<h1>����� ���������</h1>
<?php
Error_reporting(E_ALL);


$u = rand (0, 100);
$x = 1;
$y = 1;
$z = "�� ������";
	
for ($i=0; $i=100; $i++) {
	if ($x > $u) {
		echo "���������� ����� �� ������ � �������� ���";
	break;
	}
	if ($x == $u) {
		echo "���������� ����� ������ � �������� ���";
	break;
	}
	else {
	$z=$x;
	$x=$x+$y;
	$y=$z;
	}
}
echo "</br>";
echo "</br>";
echo "<h3>�������������� ��������:</h3>";
echo "���������� ����� ".$u." - ".gettype ($u);
echo "</br>";
echo "x = ".$x." - ".gettype ($x);
echo "</br>";
echo "y = ".$y." - ".gettype ($y);
echo "</br>";
echo "z = ".$z." - ".gettype ($z);

?>



	
