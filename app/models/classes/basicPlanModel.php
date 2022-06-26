<?php
namespace Classes\BasicPlan;

require_once 'app\models\interfaces\planInterface.php';
use Interfaces\Plan\PlanInterface as PlanInterface;


class BasicPlan implements PlanInterface {
    public $planTier = "Basic Plan";

    public function getPlanTier() {
        return $planTier;
    }
};

?>