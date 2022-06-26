<?php
namespace Classes\User;

require "app\models\interfaces\planInterface.php";
require "app\models\classes\serverModel.php";
require_once 'app\controllers\userController.php';

use Interfaces\Plan\PlanInterface as Plan;
use Interfaces\Server\ServerInterface as Server;
use Controllers\UserController\UserController as UserController;



class User {
    public $name;
    public $userPlanTier;
    public $subscribed = false;
    public $userConnectedServers = array();
    

    public function connectServer(Server $server) {
        $userController = new UserController();
        echo "\n\nAction: Connecting to Server $server->name";
        if ($this->subscribed) {
            if (empty($this->userConnectedServers) || $this->userPlanTier !== "Basic Plan") {
                array_push($this->userConnectedServers, $server);
                echo "\n\nAction ==> Server $server->name is connected !";
                $userController->displayUserInformation($this->name, $this->userPlanTier, $this->userConnectedServers);

                return "Connected";
            } else {
                echo "\n\nError ==> User Exceeded Server Limit allowed for Plan $this->userPlanTier";
                return "Fail";
            }
        } else {
            echo "\n\nError ==> User is not subscribed to any plan.";
            return "Fail";
        }
        
    }

    public function subscribe(Plan $Plan) {
        echo "\n\nAction: Subscribing to Plan $Plan->planTier";
        $this->subscribed = true;
        $this->userPlanTier = $Plan->planTier;
        echo "\n\nSubscribed to Plan $Plan->planTier";

    }

    public function unsubscribe(){
        echo "\n\nCancelling subscription from plan $this->userPlanTier";
        $this->subscribed = false;
        echo "\n\nYou have sucessfully unsubscribed from plan $this->userPlanTier.";
        echo "\n\nThank you for using RunCloud!";
    }

 
};

?>