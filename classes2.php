<?php

class Bicycle
{
	public $color;

	public function echoColor()
	{
		echo $this->color . "\n";
	}
}

$bike = new Bicycle();
$bike->color = 'Red White and Blue';
$bike->echoColor();
