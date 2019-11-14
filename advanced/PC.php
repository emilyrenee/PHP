<?php
namespace Advanced;

require_once("./Workstation.php");

use Advanced\Workstation as Station;

class PC extends Station {
    public function getWorkstationName() {
        parent::getWorkstationName();
        return Workstation::getWorkstationComputer();
    }
}
