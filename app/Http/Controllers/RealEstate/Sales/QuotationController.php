<?php

namespace App\Http\Controllers\RealEstate\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Sales\QuotationRequest;
use App\Models\Sales\Quotation;
use App\Services\RealEstate\BuildingService;

class QuotationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $this->authorize(AbilityEnum::VIEW, Quotation::class);

        $records = Quotation::whereBuildingId(BuildingService::getBuildingId())->with('floor', 'flat')->get();
        $params = [
            'pageTitle' => __('general.sales_quotation'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.quotation.index', $params);
    }

    public function create()
    {
//        $this->authorize(AbilityEnum::CREATE, Quotation::class);
        $params = [
            'pageTitle' => __('general.new_sales_quotation'),
        ];

        return view('dashboard.real-estate.quotation.create', $params);
    }

    public function store(QuotationRequest $request)
    {
//        $this->authorize(AbilityEnum::CREATE, Quotation::class);

        $data = $request->createData();
        if ($data) {
            if ($request->doPrint) {
                return redirect()->route('dashboard.quotations.show', $data->quot_no)
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.quotations.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
//        $this->authorize(AbilityEnum::VIEW, Quotation::class);
        $model = Quotation::whereBuildingId(BuildingService::getBuildingId())->where('quot_no', $id)->with('installments')->firstOrFail();
        $params = [
            'pageTitle' => __('general.sales_quotation_print'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.quotation.print', $params);
    }

    public function edit($id)
    {
        //
    }

    public function update(QuotationRequest $request, $id)
    {
        //
    }

    public function destroy(QuotationRequest $request, $id)
    {
        //
    }
}
