<?php
namespace Classes\BusinessPlan;

require_once 'app\models\interfaces\planInterface.php';
use Interfaces\Plan\PlanInterface as PlanInterface;


class BusinessPlan implements PlanInterface {
    public $planTier = "Business Plan";

    public function getPlanTier() {
        return $planTier;
    }
};

?>