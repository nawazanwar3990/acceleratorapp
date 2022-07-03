<?php

namespace App\Http\Controllers\PlanManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanManagement\InstallmentTermRequest;
use App\Models\PlanManagement\InstallmentTerm;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InstallmentTermController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', InstallmentTerm::class);
        $params = [
            'pageTitle' => __('general.installment_term'),
        ];

        return view('dashboard.plan-management.installment-term.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(InstallmentTermRequest $request)
    {
        $this->authorize('create', InstallmentTerm::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.installment-terms.create')
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
