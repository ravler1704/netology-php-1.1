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

?>
