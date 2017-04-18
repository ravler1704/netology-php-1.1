<?php
Error_reporting(E_ALL);

$continents = array (
"Africa" => array("Mammuthus columbi", "Diceros bicornis", "Panthera leo", "Cephalophinae", "Elephantidae"),
"Russia" => array("Canidae", "Lepus europaeus", "Sciurus", "Sus scrofa", "Erinaceidae"),
"America" => array("Ovis nivicola", "Lynx rufus", "Rangifer tarandus", "Canis latrans", "Ursus arctos horribilis")
);

echo "<h1>Исходный массив</h1>";

foreach ($continents as $continent_name => $continent) {
	echo "<h2>{$continent_name}</h2>";
		foreach ($continent as $animals) {
			echo "<p>{$animals}</p>";

			
		}
}

echo "<h1>Массив с животными из 2 слов</h1>";

foreach ($continents as $continent_name => $continent) {
	echo "<h2>{$continent_name}</h2>";
		foreach ($continent as $animals) {
			echo "<p>{$animals}</p>";
				$animals_explode = explode(" ", $animals);
				echo count($animals_explode);

			
		}
}


echo "<h1>ТЕСТ</h1>";

foreach ($continents as $continent_name => $continent) {
	echo "<h2>{$continent_name}</h2>";
		foreach ($continent as $animals) {
			
				$animals_explode = explode(" ", $animals);//разделяем строку $animals на массив $animals_explode
				$counter = count($animals_explode);//считаем сколько элементов в массиве $animals_explode
				//echo $counter;
				if ($counter == 2) {//если 2 элемента
				$animals_explode_impode = implode(" ", $animals_explode);//объединяем их в строку
				var_dump ($animals_explode_impode);//получаем 3 строки
				
				}
				
				
			
		}
}


?>
