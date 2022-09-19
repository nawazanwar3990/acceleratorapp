<?php

namespace App\Services;

use App\Models\Plan;

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

    public function findByCode(string $string)
    {
    }
}
