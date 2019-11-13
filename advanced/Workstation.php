<?php 
namespace Advanced;
require("./Computer.php");

class Workstation extends Computer {
    protected $workstation = 'workstation' . PHP_EOL;

    private function getWorkstationComputerName() {
        return Computer::getComputerName();
    }

    public function getWorkstationComputer() {
        return $this->getWorkstationComputerName();
    }

    public function getWorkstationName() {
        print_r($this->workstation);
    }

    public function stop() {
        parent::stop();
        parent::sleep();
        print_r('work station stopping'. PHP_EOL);
    }

    public function start() {
        parent::start();
        parent::compute();
        print_r('work station starting'. PHP_EOL);
    }

}