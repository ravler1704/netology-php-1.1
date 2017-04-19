<?php
Error_reporting(E_ALL);

$continents = array (
"Africa" => array("Mammuthus columbi", "Diceros bicornis", "Panthera leo", "Cephalophinae", "Elephantidae"),
"Russia" => array("Canidae", "Lepus europaeus", "Sciurus", "Sus scrofa", "Erinaceidae"),
"America" => array("Ovis nivicola", "Lynx rufus", "Rangifer tarandus", "Canis latrans", "Ursus arctos")
);

echo "<h1>Исходный массив</h1>";
foreach ($continents as $continent_name => $continent) {
	echo "<h2>{$continent_name}</h2>";
		foreach ($continent as $animals) {
			echo "<p>{$animals}</p>";
		}
}

echo "<h1>Массив с животными из 2 слов</h1>";
$animals_2_words_array = array();
foreach ($continents as $continent_name => $continent) {
	echo "<h2>{$continent_name}</h2>";
		foreach ($continent as $animals) {
				$animals_explode_space = explode(" ", $animals);
				if (count ($animals_explode_space) == 2) {
					$animals_2_words = $animals;
				echo "<p>{$animals_2_words}</p>";
				$animals_2_words_array[] = $animals_2_words;
				}
		}
}

echo "<h1>Перемешанные животные</h1>";
$counter = count ($animals_2_words_array);
for ($i = 0; $i < $counter; $i++) {
	$animals_2_words_array_explode = explode(" ", $animals_2_words_array[$i]);//раздел¤м животное [i] на два слова
	$animal_first[] = $animals_2_words_array_explode[0]; //первое слово в массив $animal_first[]
	$animal_second[] = $animals_2_words_array_explode[1]; //второе слово в массив $animal_second[]	
}
shuffle($animal_second);

for ($i = 0; $i < $counter; $i++) {
	echo $animal_first[$i]." ".$animal_second[$i]."<br/>";
	$mixed_pet[] = $animal_first[$i]." ".$animal_second[$i]."<br/>";
}
?>
