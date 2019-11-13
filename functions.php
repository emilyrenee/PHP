<?php

function add($baz, $buzz)
{
    return $baz + $buzz;
}

function subtract($baz, $buzz)
{
    return $baz - $buzz;
}

// passing by reference
function multiply(&$baz, &$buzz)
{
    return $baz * $buzz;
}

// passing by reference
function divide(&$baz, &$buzz)
{
    return $baz / $buzz;
}

$foo = 1;
$bar = 2;

print_r(add($foo, $bar) . PHP_EOL);
print_r(subtract($foo, $bar) . PHP_EOL);
print_r(multiply($foo, $bar) . PHP_EOL);
print_r(divide($foo, $bar) . PHP_EOL);


function compare($baz, $buzz, $qux = false)
{
    $string = "The parameters are not equal in value";
    $areEqualByValue = $baz == $buzz;
    $areEqualByType = gettype($baz) == gettype($buzz);

    if ($qux) {
        if ($areEqualByValue && $areEqualByType) {
            $string = "The parameters are equal in value and by type.";
        } elseif ($areEqualByValue) {
            $string = "The parameters are equal in value, but are not equal by type.";
        } else {
            $string = "The parameters are not equal in value or equal by type.";
        }
    } else {
        if ($areEqualByValue) {
            $string = "The parameters are equal in value.";
        }
    }

    print_r($string . PHP_EOL);
}

compare(4, "4");
compare(5, "5", true);
compare(4, 4.0);
compare(5, 5.0, true);
