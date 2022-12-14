<?php

namespace App\Services;

use App\Models\Investment;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class InvestmentService
{
    public function listInvestmentsByPagination($baId): LengthAwarePaginator
    {
        $investments = Investment::whereJsonContains('mentors',"".$baId."");
        return $investments->paginate(20);
    }
}
