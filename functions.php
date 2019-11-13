<?php

function add($baz, $buzz) {
    return $baz + $buzz;
}

function subtract($baz, $buzz) {
    return $baz - $buzz;
}

// passing by reference
function multiply(&$baz, &$buzz) {
    return $baz * $buzz;
}

// passing by reference
function divide(&$baz, &$buzz) {
    return $baz / $buzz;
}

$foo = 1;
$bar = 2;

print_r(add($foo, $bar) . PHP_EOL);
print_r(subtract($foo, $bar) . PHP_EOL);
print_r(multiply($foo, $bar) . PHP_EOL);
print_r(divide($foo, $bar) . PHP_EOL);
