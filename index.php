<?php
//https://3v4l.org/pGen8

$randomIntegerArray = array_map(function () {
	return rand(0, 1000);
}, array_fill(0, 10, null));

$odds = [];
foreach($randomIntegerArray as $val) {
	if ($val % 2 != 0) {
		$odds[] = $val;
	}
}

echo "Generated Random Array: \n";
print_r($randomIntegerArray);
echo "\n\n";

echo "MINIMUM: " . min($randomIntegerArray) . "\n";
echo "MAXIMUM: " . max($randomIntegerArray) . "\n";
echo "ODD Numbers: \n";
print_r($odds);