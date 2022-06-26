<?php


require_once 'app\models\classes\userModel.php';
require_once 'app\models\classes\proPlanModel.php';
require_once 'app\models\classes\serverModel.php';
require_once 'app\models\classes\basicPlanModel.php';
require_once 'app\models\classes\businessPlanModel.php';

use Classes\Server\Server as Server;
use Classes\User\User as User;
use Classes\ProPlan\ProPlan as ProPlan;
use Classes\BasicPlan\BasicPlan as BasicPlan;
use Classes\BusinessPlan\BusinessPlan as BusinessPlan;

$user = new User();
$user->name = "Zeyad";

$user->subscribe(new BasicPlan());
$server = new Server();
$server->name = "server1";

$server2 = new Server();
$server2->name = "server12";


$user->connectServer($server);

$user->connectServer($server2);
$user->subscribe(new ProPlan());
$user->connectServer($server2);

?>