<?php
namespace Advanced;

require('./Mac.php');
require('./PC.php');
require('./Server.php');

$computer = new Computer();
$workstation = new Workstation();
$server = new Server();

$workstation->start();
$workstation->stop();
$server->authenticate('me');