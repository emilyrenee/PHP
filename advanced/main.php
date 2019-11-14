<?php

namespace Advanced;

require('./Mac.php');
require('./PC.php');
require('./WebServer.php');

$computer = new Computer();
$workstation = new Workstation();
$server = new Server();
$webserver = new WebServer();

$workstation->start();
$workstation->getWorker();
$workstation->setWorker('Lucy');
$workstation->getWorker();
$server->authenticate('me');
$webserver->login($workstation->getWorker(), $server->getPassword());
$webserver->authenticate('me');
$workstation->stop();