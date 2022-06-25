<?php

namespace App\Http\Controllers\RealEstate;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\BusinessRequest;
use App\Models\Business;
use App\Traits\General;

class BusinessController extends Controller
{
    use General;
    public function __construct()
    {
        $this->middleware('auth');
        $this->makeDirectory('business');
    }

    public function index()
    {
        $model = Business::findOrFail(1);
        $params = [
            'pageTitle' => __('general.business_settings'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.business.index', $params);
    }

    public function create()
    {
        //
    }

    public function store(BusinessRequest $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(BusinessRequest $request, $id)
    {
        if ($request->updateData()) {
            return redirect()
                ->route('dashboard.business-settings.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy($id)
    {
        //
    }
}
