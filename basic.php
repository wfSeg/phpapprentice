<?php
/*
echo "Da apprentice\n";

?>

<?php

echo "Da loops\n";

$num = 5;
while ($num > 0) {
	echo "this is the $num loop\n";
	--$num;
}
while ($num < 5) {
	echo "counting back up loop $num\n";
	++$num;
}

echo "Fancy arrays\n";
$set = [3, 8, 3, 9, 4];
foreach ($set as $num) {
	echo "Array value $num\n";
}

$values = ['one', 'two', 'three'];
foreach ($values as $dudeconfusingwhydidyouusesuchasimilarsoundingvariable) {
	if ($dudeconfusingwhydidyouusesuchasimilarsoundingvariable === 'two') {
		echo "breaaaaak, it's two\n";
		break;
	}
	echo "the value is $dudeconfusingwhydidyouusesuchasimilarsoundingvariable\n";
}

echo "Setting Up an Array with categories built-in\n";
$car = ['make' => 'Toyota', 'model' => 'Camry'];	# don't trip up with single ' and double " quotes here
echo $car['model'] . "\n";
echo $car['make'] . "\n";
?>


echo "FUNctions\n";

function greetings($name) {
	echo "Hello there, General $name\n";
}

greetings("BOB");
greetings("Larry");
greetings("Moe");

# wait, constructors... passes the variable into the class. then what's the $this?
class Ballcap
{
	public $color;
	public function __construct($color) {
		$this->color = $color;		#why... is color = $color
	}
}
$ballcap = new Ballcap('Blue');


class Tophat {
	public function __construct($color) {
		return $color;
	}
}

$tophat = new Tophat('Grey');	#this doesn't print anything on php 5.4


class TinyHouse {
	private $color;
	private $wheels;
	private $trailer;
	
	public static function build($color, $wheels, $trailer) {
		return new self($color, $wheels, $trailer);
	}
	
	public function __construct($color, $wheels, $trailer) {
		$this->color = $color;
		$this->wheels = $wheels;
		$this->trailer = $trailer;
	}
}

$house = Tinyhouse::build('Blue', 4, true);	#doesn't print anything in php 5.4 either. 

# this seems to work though, from the php website
function square($num) {
	return $num * $num;
}

echo square(4);

# going to start adopting the Class/Function formatting, the { and } are on separate lines
interface Payment
{
	public function charge($amount);
}

class CreditCard implements Payment
{
	public function charge($amount)
	{
		// contacts credit card payment provider...
	}
}

$creditCard = new CreditCard();
if ($creditCard instanceof Payment) {
	$creditCard->charge(25);
}
# starting to think these examples actually are not supposed to print anything.
# because this Payment, CreditCard didn't print anything
*/

# Alrighty, getting to error handling
echo "Exceptions-y'all\n";

class Processor
{
	public function charge($creditCard)
	{
		if (strlen($creditCard->getNumber()) !== 16) {
			throw new Exception('Credit card has been DECLINED! jk it is not right');
		}
	}
}

$processor = new Processor();
$processor->charge('1234');

# Doesn't work "PHP Fatal error:  Call to a member function getNumber() on a non-object in /root/phpapprentice/basic.php on line 127"

# The more I do this "phpapprentice" site, the more errors I'm seeing. It's not compatible with php 5.4.16 :/




	
