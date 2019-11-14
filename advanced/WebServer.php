<?php
namespace Advanced;

require("./Server.php");

trait Authenticate {
    public function authenticate($name) {
        parent::authenticate($name);
        print_r($name . PHP_EOL);
    }
}

class WebServer extends Server {
    use Authenticate;

    public function login($name, $password) {
        return 'Success!' . PHP_EOL;
    }
}
