<?php

class Vehicle
{
	public function drive()
	{
		echo "driving...\n";
	}
}

class Truck extends Vehicle {} #huh???

$truck = new Truck();
$truck->drive();

class Tractor extends Vehicle
{
	public function drive()
	{
		echo "driving slowly...\n";
	}
}

$tractor = new Tractor();
$tractor->drive(); # even though it's "drive" it's Tractor's drive, not Vehicle's drive

class Motorcycle extends Vehicle
{
	public function pushPedal()
	{
		$this->drive();
	}
}

$cycle = new Motorcycle();
$cycle->pushPedal();	# this thing propagates all the way down to Vehicle's "drive"

# $this is a special variable... uh it uses the input from whatever

class Racecar extends Vehicle
{
	public function drive()
	{
		parent::drive();
		echo "driving even faster...\n";
	}
}

$racecar = new Racecar();
$racecar->drive();
