<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Definition\HrBusinessRequest;
use App\Models\Definition\HumanResource\HrBusiness;
use function __;
use function redirect;
use function view;

class HrBusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', HrBusiness::class);
        $records = HrBusiness::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.business'),
            'records' => $records,
        ];

        return view('dashboard.definition.business.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrBusiness::class);
        $parentHeads = HrBusiness::whereParentId('0')
            ->orderBy('name', 'ASC')->pluck('name', 'id');
        $params = [
            'pageTitle' => __('general.new_business'),
            'parentHeads' => $parentHeads,
        ];

        return view('dashboard.definition.business.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrBusinessRequest $request)
    {
        $this->authorize('create', HrBusiness::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.hr-business.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.hr-business.index')
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
        $this->authorize('view', HrBusiness::class);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->authorize('update', HrBusiness::class);
        $parentHeads = HrBusiness::whereParentId('0')
            ->orderBy('name', 'ASC')->pluck('name', 'id');
        $model = HrBusiness::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_business'),
            'parentHeads' => $parentHeads,
            'model' => $model,
        ];
        return view('dashboard.definition.business.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrBusinessRequest $request, $id)
    {
        $this->authorize('update', HrBusiness::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.hr-business.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrBusinessRequest $request,$id)
    {
        $this->authorize('delete', HrBusiness::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.hr-business.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
