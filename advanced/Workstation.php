<?php 
namespace Advanced;

require("./Computer.php");

class Workstation extends Computer {
    public $worker = 'Emily';

    public function stop() {
        $warn = function($name)
        {
            print_r('Warning, ' . $name . '! Your workstation is stopping. Be sure to save all your code!' . PHP_EOL);
        };

        $warn($this->worker);
        parent::stop();
        print_r('work station stopped'. PHP_EOL);
    }

    public function start() {
        $greet = function($name)
        {
            print_r('Hello, ' . $name . '! Welcome to your workstation.' . PHP_EOL);
        };

        parent::start();
        $greet($this->worker);
        parent::compute();
        print_r('work station started'. PHP_EOL);
    }

    public function getWorker() {
        print_r($this->worker . PHP_EOL);
    }

    public function setWorker($worker) {
        $success = function($name)
        {
            print_r($name . ' has been succesfully set as the worker for this station.' . PHP_EOL);
        };
        $this->worker = $worker;
        $success($this->worker);

    }
}