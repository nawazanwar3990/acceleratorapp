<?php

namespace App\Services;

use App\Enum\TableEnum;
use App\Models\Investment;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class InvestmentService
{
    public function listInvestmentsByPagination($baId): LengthAwarePaginator
    {
        $investments = Investment::leftJoin(TableEnum::INVESTMENT_STATUSES,'investments.id','investment_statuses.investment_id')
            ->whereJsonContains('investments.mentors',"".$baId."")
        ->select('investments.*','investment_statuses.status');
        return $investments->paginate(20);
    }
}
