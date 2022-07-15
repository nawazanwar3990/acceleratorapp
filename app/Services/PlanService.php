<?php

namespace App\Services;

use App\Enum\KeyWordEnum;
use App\Enum\TableEnum;
use App\Models\Plans\Plan;

class PlanService
{

    public static function listPlans()
    {
        return Plan::OrderBy('name', 'ASC')->get();
    }
    public static function pluckPlans()
    {
        return Plan::pluck('name', 'id');
    }
    public static function findById(mixed $planId)
    {
        return Plan::find($planId);
    }
}
