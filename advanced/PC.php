<?php
require_once("./Workstation.php");

class PC extends Workstation {
    public function getWorkstationName() {
        parent::getWorkstationName();
        return Workstation::getWorkstationComputer();
    }
}