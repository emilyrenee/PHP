<?php
require_once("./Workstation.php");

class Mac extends Workstation {
    protected function getMacWorkstationName() {
        return Workstation::getWorkstationName();
    }

    public function getMacWorkstation() {
        return $this->getMacWorkstationName();
    }
}