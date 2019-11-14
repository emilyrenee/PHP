<?php
namespace Advanced;
require_once("./Computer.php");

interface ServerInterface
{
    public function authenticate($name);
}


class Server extends Computer implements ServerInterface {
    public function authenticate($name)
    {
        print_r($name);
    }
}