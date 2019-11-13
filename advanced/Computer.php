<?php

class Computer {
    public $public_computer = 'public computer' . PHP_EOL;

    public function getComputerName() {
        print_r($this->public_computer);
    }

    public function start() {
        print_r('computer starting' . PHP_EOL);
    }

    public function stop() {
        print_r('computer stopping' . PHP_EOL);
    }

    public function sleep() {
        print_r('computer sleeping' . PHP_EOL);
    }

    public function compute() {
        print_r('computer computing' . PHP_EOL);
    }
 }