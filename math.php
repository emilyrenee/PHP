<?php

class Math
{
    public function add($baz, $buzz)
    {
        return $baz + $buzz;
    }

    public function subtract($baz, $buzz)
    {
        return $baz - $buzz;
    }

    // passing by reference
    public function multiply(&$baz, &$buzz)
    {
        return $baz * $buzz;
    }

    // passing by reference
    public function divide(&$baz, &$buzz)
    {
        return $baz / $buzz;
    }
}
