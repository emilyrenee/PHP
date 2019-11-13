<?php


// create array with values between 0 and 100, every three steps
$numbers = [];

$count = 0;

while($count <= 100) {
	if ($count % 3 == 0) {
		array_push($numbers, $count);
	}
	$count++;
}

function printText($text, $repetition) {
	while ($repetition > 0) {
		print_r($text);
		$repetition--;
	}
}

foreach($numbers as $number) {
	if ($number == 3) {
		$text = "Three";
		$repetition = 1;
		printText($text, $repetition);
	}

	if ($number == 9) {
		$text = "Nine";
		$repetition = 3;
		printText($text, $repetition);
	}

	if ($number == 15) {
		$text = "Fifteen";
		$repetition = 5;
		printText($text, $repetition);
	}
};

