<?php
namespace Advanced;

require('./Mac.php');
require('./PC.php');

$computer = new Computer();
$computerName = $computer->getComputerName();

$workstation = new Workstation();
$workstationComputerName = $workstation->getWorkstationComputer();
$workstationName = $workstation->getWorkstationName();

$computerName;
$workstationComputerName;
$workstationName;

$workstation->start();
$workstation->stop();