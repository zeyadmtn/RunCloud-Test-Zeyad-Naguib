<?php

namespace Controllers\UserController;

class UserController {
    public function displayUserInformation($name, $plan, $conServers){
        


        echo "\n+----------------------------------+\n";
        echo "| User's Name       |  $name             \n";
        echo "+----------------------------------+\n";
        echo "| Current Plan      |  $plan             \n";
        echo "+----------------------------------+\n";
        echo "| Connected Servers |  ";
        foreach($conServers as $server){
            echo "$server->name  [$server->ipAddress]    ";
        }
        echo "\n+----------------------------------+\n";
    }

}