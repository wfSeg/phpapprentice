<?php

class Processor
{
	public function charge($creditCard)
	{
		if (strlen($creditCard->getNumber()) !== 16) {
			throw new Exception('error error erro cc not right error');
		}
	}
}

$processor = new Processor();
#$processor->charge('1234');
# use try instead so the code will execute

try {
	$processor->charge('1234');
} catch (Exception $e) {
	echo $e->getMessage() . "\n";
}

#still getting error for member function 'getNumber()'

#i guess he assumes we have a getNumber and getMessage function written up.
#this tutorial is meh.