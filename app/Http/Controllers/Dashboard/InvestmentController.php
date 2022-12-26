<?php

namespace App\Http\Controllers\Dashboard;

use App\Enum\AcceleratorTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\BuildingRequest;
use App\Models\Building;
use App\Models\Investment;
use App\Models\InvestmentStatus;
use App\Services\BuildingService;
use App\Services\InvestmentService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
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
        $this->middleware('auth');
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
        $baId = Auth::id();
        $model = Investment::find($id);
        $investmentStatus = InvestmentStatus::where('investment_id', $id)
            ->where('investor_id', $baId)->first();
        $params = [
            'pageTitle' => "View Investment Form",
            'model' => $model,
            'investmentStatus' => $investmentStatus
        ];
        return view('dashboard.investments.show', $params);
    }

    public function store(Request $request): JsonResponse
    {
        InvestmentStatus::updateOrCreate([
            'investment_id' => $request->input('investment_id'),
            'investor_id' => $request->input('investor_id')
        ], [
            'reason' => $request->input('reason'),
            'status' => $request->input('status'),
            'investor_type' => 'ba'
        ]);
        session()->put('success', 'Status Updated Successfully');
        return response()->json([
            'status' => true
        ]);
    }
}
