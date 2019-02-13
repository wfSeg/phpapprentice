<?php

function cap($value) {
	return mb_strtoupper($value);
}

$animal = cap('dog');
echo "$animal\n";
