<?php
namespace Advanced;
class Computer {
    public $name = "Emily's Computer";
    private $password = "password";
    static $isOn = false;
    protected $isComputing = false;

    public function start() {
        $this->isOn = true;
        print_r('computer starting' . PHP_EOL);
    }

    public function stop() {
        $this->isComputing = false;
        $this->isOn = false;
        print_r('computer stopping' . PHP_EOL);
    }

    public function sleep() {
        $this->isComputing = false;
        print_r('computer sleeping' . PHP_EOL);
    }

    public function compute() {
        $this->isComputing = true;
        print_r('computer computing' . PHP_EOL);
    }

    public function getName() {
        print_r($this->name . PHP_EOL);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPassword() {
        print_r($this->password . PHP_EOL);
    }

    private function setPassword($password) {
        $this->password = $password;
    }
 }