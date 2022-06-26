<?php
namespace Classes\Server;

require 'app\models\interfaces\serverInterface.php';

use Interfaces\Server\ServerInterface as ServerInterface;

class Server implements ServerInterface {
    public $name;
    public $ipAddress;


    public function getServerName() {
        return $name;
    }

    public function getServerIP() {
        return $ipAddress;
    }

};

?>