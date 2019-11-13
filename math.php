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

        foreach ($args as $arg) {
            $index = array_search($arg, $args);
            
            if ($index == 0) {
                $result = $args[$index];
            } else {
                $result += $args[$index];
            }
        }
        return $result;
    }

    public function subtract()
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        $args = func_get_args();

        foreach ($args as $arg) {
            $index = array_search($arg, $args);

            if ($index == 0) {
                $result = $args[$index];
            } else {
                $result -= $args[$index];
            }
        }
        return $result;
    }

    public function multiply()
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        $args = func_get_args();

        foreach ($args as $arg) {
            $index = array_search($arg, $args);

            if ($index == 0) {
                $result = $args[$index];
            } else {
                $result *= $args[$index];
            }
        }

        return $result;
    }

    public function divide()
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        $args = func_get_args();

        foreach ($args as $arg) {
            $index = array_search($arg, $args);

            if ($index == 0) {
                $result = $args[$index];
            } else {
                $result /= $args[$index];
            }
        }
        return $result;
    }
}
