<<?php
echo "Hoe veel activiteiten wil je toevoegen?\n";
$aantal = rtrim(fgets(STDIN));
$arr = [];
$i = 0;
if (!(is_numeric($aantal))){
	echo "Dat is geen nummer\n";
	exit;
}
while ($i < $aantal){
	echo "Wat wil je toevoegen aan jouw bucket list?\n";
	$listitem = rtrim(fgets(STDIN));
	array_push($arr, $listitem);
	$i++;
}
echo "Op jouw bucket list staat:\n";
for($i = 0; $i < count($arr); ++$i)
	echo $arr[$i] . "\n";
?>