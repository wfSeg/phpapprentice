<?php

function hello_world() {
	echo "hello world\n";
}

hello_world();

function greet($firstname, $lastname) {
	echo "hello $firstname, $lastname\n";
}

greet('John', 'Smith');

$sum = function ($a, $b) {
	return $a + $b;
};

echo $sum(1, 2) . "\n";
