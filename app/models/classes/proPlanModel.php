<?php
namespace Classes\ProPlan;

require_once 'app\models\interfaces\planInterface.php';
use Interfaces\Plan\PlanInterface as PlanInterface;

class ProPlan implements PlanInterface {
    public $planTier = "Pro Plan";

    public function getPlanTier() {
        return $planTier;
    }
};

?>