<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuildingRequest;
use App\Models\Building;
use App\Models\Investment;
use App\Services\BuildingService;
use App\Services\InvestmentService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function __;
use function redirect;
use function session;
use function view;

class InvestmentController extends Controller
{
    use General;

    public function __construct(
        private InvestmentService $investmentService
    )
    {
        $this->makeMultipleDirectories('buildings', ['documents', 'images']);
    }

    public function index(): Factory|View|Application
    {
        $baId = Auth::user()->ba->id;
        $records = $this->investmentService->listInvestmentsByPagination($baId);
        $params = [
            'pageTitle' => __('general.investments'),
            'records' => $records,
            'baId' => $baId
        ];
        return view('dashboard.investments.index', $params);
    }

    public function show($id): Factory|View|Application
    {
        $model = Investment::find($id);
        $params = [
            'pageTitle' => "View Investment Form",
            'model' => $model
        ];
        return view('dashboard.investments.show', $params);
    }
}
