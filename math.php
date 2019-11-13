<?php

class Math
{
    const ADD = "+";
    const SUBTRACT = "-";
    const MULTIPLY = "*";
    const DIVIDE = "/";

    private function doOperation($operation, $args)
    {
        foreach ($args as $arg) {
            $index = array_search($arg, $args);

            if ($index == 0) {
                $result = $args[$index];
            } else {
                switch ($operation) {
                    case '+':
                        $result += $args[$index];
                        break;
                    case '-':
                        $result -= $args[$index];
                        break;
                    case '/':
                        $result /= $args[$index];
                        break;
                    case '*':
                        $result *= $args[$index];
                        break;
                }
            }
        }
        return $result;
    }

    public function add(...$args)
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        return $this->doOperation(self::ADD, $args);
    }

    public function subtract(...$args)
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        return $this->doOperation(self::SUBTRACT, $args);
    }

    public function multiply(...$args)
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        return $this->doOperation(self::MULTIPLY, $args);
    }

    public function divide(...$args)
    {
        $numberArgs = func_num_args();
        if ($numberArgs < 2) {
            return null;
        }
        return $this->doOperation(self::DIVIDE, $args);
    }
}
