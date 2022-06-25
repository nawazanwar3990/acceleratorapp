<?php

namespace App\Http\Controllers\Dashboard\Definition;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\Definition\HrMinistryRequest;
use App\Models\Definition\HumanResource\HrMinistry;
use function __;
use function redirect;
use function view;

class HrMinistryController extends Controller
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
        $this->authorize('view', HrMinistry::class);
        $records = HrMinistry::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.ministry'),
            'records' => $records,
        ];
        return view('dashboard.definition.ministry.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', HrMinistry::class);
        $params = [
            'pageTitle' => __('general.new_ministry'),
        ];

        return view('dashboard.definition.ministry.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HrMinistryRequest $request)
    {
        $this->authorize('create', HrMinistry::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.ministry.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.ministry.index')
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
        $this->authorize('view', HrMinistry::class);
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
        $this->authorize('update', HrMinistry::class);
        $model = HrMinistry::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_ministry'),
            'model' => $model,
        ];

        return view('dashboard.definition.ministry.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HrMinistryRequest $request, $id)
    {
        $this->authorize('update', HrMinistry::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.ministry.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HrMinistryRequest $request,$id)
    {
        $this->authorize('delete', HrMinistry::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.ministry.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
