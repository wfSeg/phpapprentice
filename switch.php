<?php

$food = 'apples';
switch ($food) {
	case 'apples':
		echo "Eating an apple\n";
		break;
	case 'oranges':
		echo "Eating an orange\n";
		break;
	case 'peaches':
		echo "Eating a peach\n";
		break;
	default:
		echo "No food, I am hungry\n";
}

$language = 'english';
echo $language == 'spanish' ? "hola\n" : "hello\n";

$iexist = 'anything';
echo $iexist;
echo $IDoNotExist ?? "This variable does not exist\n";
