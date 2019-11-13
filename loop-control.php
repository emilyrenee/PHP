<?php

$numbers = [];
$count = 0;

while($count <= 100) {
	if ($count % 3 == 0) {
		array_push($numbers, $count);
	}
	$count++;
}

foreach($numbers as $number) {
	if ($number % 7 == 0) {
		$numberFactorials = $number / 7;
		print_r("Sevens are lucky, this number has " . $numberFactorials . "," . PHP_EOL);
		print_r('First number' . PHP_EOL);
	}
	
	if ($number % 10 == 0) {
		print_r($number . " is a round number" . PHP_EOL);
		print_r('Last number' . PHP_EOL);
	}
};
