<?php
Error_reporting(E_ALL);

$content = file_get_contents ('http://api.openweathermap.org/data/2.5/forecast?id=5601538&lang=ru&APPID=6097e8bd811db29d3b32fe71b827d4d5');
$weather = json_decode ($content, true);
$celvin = 274.15;
echo "<h1>"."Прогноз погоды - ".$weather["city"]["name"]."</h1>";
?>

<table>
<tr>
<td>
<?php
echo "На дату и время - ".$weather["list"]["0"]["dt_txt"]."</br>";
echo "Температура воздуха - ".round(($weather["list"]["0"]["main"]["temp"]) - $celvin)." град., C"."</br>";
echo "Погодные условия - ".$weather["list"]["0"]["weather"]["0"]["description"]."</br>";
echo "<img src=http://openweathermap.org/img/w/".$weather["list"]["0"]["weather"]["0"]["icon"].".png>"."</br>";
?>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<?php
echo "На дату и время - ".$weather["list"]["1"]["dt_txt"]."</br>";
echo "Температура воздуха - ".round(($weather["list"]["1"]["main"]["temp"]) - $celvin)." град., C"."</br>";
echo "Погодные условия - ".$weather["list"]["1"]["weather"]["0"]["description"]."</br>";
echo "<img src=http://openweathermap.org/img/w/".$weather["list"]["1"]["weather"]["0"]["icon"].".png>"."</br>";
?>
</td>
</tr>
