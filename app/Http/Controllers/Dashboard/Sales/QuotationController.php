<?php

namespace App\Http\Controllers\Dashboard\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sales\QuotationRequest;
use App\Models\Sales\Quotation;
use function __;
use function redirect;
use function view;

class QuotationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $this->authorize(AbilityEnum::VIEW, Quotation::class);

        $records = Quotation::with('floor', 'flat')->get();
        $params = [
            'pageTitle' => __('general.sales_quotation'),
            'records' => $records,
        ];

        return view('dashboard.quotation.index', $params);
    }

    public function create()
    {
//        $this->authorize(AbilityEnum::CREATE, Quotation::class);
        $params = [
            'pageTitle' => __('general.new_sales_quotation'),
        ];

        return view('dashboard.quotation.create', $params);
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
        $model = Quotation::where('quot_no', $id)->with('installments')->firstOrFail();
        $params = [
            'pageTitle' => __('general.sales_quotation_print'),
            'model' => $model,
        ];

        return view('dashboard.quotation.print', $params);
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
