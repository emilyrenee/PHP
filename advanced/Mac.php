<?php
namespace Advanced;

require('./Workstation.php');

use Advanced\Workstation as Station;

class Mac extends Station {
    protected function getMacWorkstationName() {
        return Workstation::getWorkstationName();
    }

    public function getMacWorkstation() {
        return $this->getMacWorkstationName();
    }
}