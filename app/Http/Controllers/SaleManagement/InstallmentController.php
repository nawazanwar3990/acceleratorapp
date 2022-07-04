<?php

namespace App\Http\Controllers\SaleManagement;
use App\Http\Controllers\Controller;
use App\Models\SaleManagement\Installment;
use App\Services\InstallmentService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    use General;

    public function __construct(
        private InstallmentService $installmentService
    )
    {

        $this->makeDirectory('sales');
        $this->makeMultipleDirectories('sales', ['documents', 'images']);
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     * @throws AuthorizationException
     */
    public function index(Request $request): Factory|View|Application
    {
        $this->authorize('view', Installment::class);
        $records = $this->installmentService->listInstallmentByPagination();
        $params = [
            'pageTitle' => __('general.sales_listing'),
            'records' => $records,
        ];

        return view('dashboard.sales-management.installments.index', $params);
    }
}
