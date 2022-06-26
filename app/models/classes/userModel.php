<?php
namespace Classes\User;

require "app\models\interfaces\planInterface.php";
require "app\models\classes\serverModel.php";

use Interfaces\Plan\PlanInterface as Plan;
use Interfaces\Server\ServerInterface as Server;

class User {
    public $userName;
    public $userPlanTier;
    public $subscribed = false;
    public $userConnectedServers = array();

    public function connectServer(Server $server) {
        if ($this->subscribed) {
            if (empty($this->userConnectedServers) || $this->userPlanTier !== "Basic Plan") {
                array_push($this->userConnectedServers, $server);
                echo "Connected";
                return "Connected";
            } else {
                echo "Failed inside";
                return "Fail";
            }
        } else {
            echo "Failed outside";
            return "Fail";
        }
        
    }

    public function subscribe(Plan $Plan) {
        
        $this->subscribed = true;
        $this->userPlanTier = $Plan->planTier;

    }

    public function unsubscribe(){
        $this->subscribed = false;
    }

 
};

?>