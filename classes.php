<?php

class Car
{
}

$car = new Car();

class Bicycle
{
	public $color;
}

$bike = new Bicycle();
$bike->color = 'Blue';
echo $bike->color . "\n";

class Tricycle
{
	public $color;

	public function echoColor()
	{
		echo $this->color . "\n";
	}
}

$bike = new Tricycle();
$bike->color = 'Red';
$bike->echoColor();
