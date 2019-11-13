<?php
require("./math.php");

$math = new Math();

print_r($math->add(1, 2, 3) . PHP_EOL);
print_r($math->subtract(1, 2, 3) . PHP_EOL);
// print_r($math->divide(1, 2, 3) . PHP_EOL);
print_r($math->multiply(1, 2, 3, 10) . PHP_EOL);