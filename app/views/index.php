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

print "\n\nRunCloud Assestment for Zeyad Naguib!\n\n";
$user = new User();
$user->name = 'Zeyad Naguib';

$server_1 = new Server();
$server_1->name = 'Server 1';
$server_1->ipAddress = '192.168.0.1';

$server_2 = new Server();
$server_2->name = 'Server 2';
$server_2->ipAddress = '192.168.0.2';

/*
* Flow 1 - Basic Plan
*/
$user->subscribe(new BasicPlan());

$user->connectServer($server_1);
$user->connectServer($server_2); // fail

/*
* Flow 2 - Pro/Business Plan
*/

$user->subscribe(new ProPlan());
$user->connectServer($server_2); // success

/*
* Flow 3 - Unsubscribe
*/

print "\nFlow #3 Unsubscribe Plan Subscription !\n\n";

$user->unsubscribe();
$user->connectServer($server_2); // fail

?>