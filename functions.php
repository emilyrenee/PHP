<?php

function add($baz, $buzz)
{
    print_r($baz + $buzz . PHP_EOL);
}

function subtract($baz, $buzz)
{
    print_r($baz - $buzz . PHP_EOL);
}

// passing by reference
function multiply(&$baz, &$buzz)
{
    print_r($baz * $buzz . PHP_EOL);
}

// passing by reference
function divide(&$baz, &$buzz)
{
    print_r($baz / $buzz . PHP_EOL);
}

$foo = 1;
$bar = 2;

add($foo, $bar);
subtract($foo, $bar);
multiply($foo, $bar);
divide($foo, $bar);


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
