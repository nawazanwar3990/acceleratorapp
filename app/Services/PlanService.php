<?php

namespace App\Services;

use App\Enum\KeyWordEnum;
use App\Enum\TableEnum;
use App\Models\PlanManagement\Plan;

class PlanService
{

    public function listPlans(mixed $type, $model)
    {
        $plans = Plan::OrderBy('name', 'ASC');
        $plans = match ($type) {
            KeyWordEnum::BUILDING => $plans->whereHas(TableEnum::BUILDINGS, function ($q) use ($model) {
                $q->whereIn(TableEnum::BUILDINGS . '.id', [$model->id]);
            }),
            KeyWordEnum::FLOOR => $plans->whereHas(TableEnum::FLOORS, function ($q) use ($model) {
                $q->whereIn(TableEnum::FLOORS . '.id', [$model->id]);
            }),
            KeyWordEnum::FLAT => $plans->whereHas(TableEnum::FLATS, function ($q) use ($model) {
                $q->whereIn(TableEnum::FLATS . '.id', [$model->id]);
            }),
        };
        return $plans->paginate(20);
    }
}
