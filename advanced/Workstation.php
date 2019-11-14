<?php 
namespace Advanced;
require("./Computer.php");

class Workstation extends Computer {
    public $worker = 'Emily';

    public function stop() {
        parent::stop();
        print_r('work station stopping'. PHP_EOL);
    }

    public function start() {
        parent::start();
        parent::compute();
        print_r('work station starting'. PHP_EOL);
    }

    public function getWorker() {
        print_r($this->name . PHP_EOL);
    }

    public function setWorker($worker) {
        $this->worker = $worker;
    }
}