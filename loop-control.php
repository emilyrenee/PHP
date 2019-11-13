<?php

$numbers = [];
$count = 0;

while ($count <= 100) {
	if ($count % 3 == 0) {
		array_push($numbers, $count);
	}
	$count++;
}

function printText($text, $repetition)
{
	while ($repetition > 0) {
		print_r($text . PHP_EOL);
		$repetition--;
	}
}

function handleNumber($number)
{
	$repetition = 1;

	if ($number == 3) {
		$text = "Three";
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

	if ($number % 7 == 0) {
		$numberFactorials = $number / 7;
		$text = "Sevens are lucky, this number has " . $numberFactorials . ",";
		printText($text, $repetition);
		$text = 'First number';
		printText($text, $repetition);
	}

	if ($number % 10 == 0) {
		$text = $number . " is a round number";
		printText($text, $repetition);
		$text = 'Last number';
		printText($text, $repetition);
	}
}

foreach ($numbers as $number) {
	handleNumber($number);
};

for ($iteration = 0; $iteration < count($numbers); $iteration++) {
	$number = $numbers[$iteration];

	handleNumber($number);
}

$iteration = 0;
while ($iteration < count($numbers)) {
	handleNumber($numbers[$iteration]);
	$iteration++;
}

// $iteration = 0;
// do {
// 	handleNumber($numbers[$iteration]);
// 	$iteration++;
// } while ($iteration < count($numbers));
