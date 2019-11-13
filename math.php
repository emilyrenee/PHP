<?php

class Math
{
    public function add()
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        $args = func_get_args();

        $result = array_reduce($args, function ($a, $b) {
            return $a + $b;
        });
        return $result;
    }

    public function subtract()
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        $args = func_get_args();

        $result = array_reduce($args, function ($a, $b) {
            return $a - $b;
        });
        return $result;
    }

    // passing by reference
    public function multiply()
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        $args = func_get_args();

        $result = array_reduce($args, function ($a, $b) {
            return $a * $b;
        });
        return $result;
    }

    // passing by reference
    public function divide()
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        $args = func_get_args();

        $result = array_reduce($args, function ($a, $b) {
            return $a / $b;
        });
        return $result;
    }
}
