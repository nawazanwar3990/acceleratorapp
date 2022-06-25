<?php

namespace App\Http\Controllers\Dashboard\Sales;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanManagement\TermRequest;
use App\Models\Sales\InstallmentTerm;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class InstallmentTermController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', InstallmentTerm::class);
        $model = InstallmentTerm::first();
        $params = [
            'pageTitle' => __('general.new_installment_term'),
            'model' => $model,
        ];

        return view('dashboard.installment-term.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TermRequest $request)
    {
        $this->authorize('create', InstallmentTerm::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.installment-term.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.installment-term.create')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
