<?php

namespace App\Http\Controllers\Dashboard\FrontDesk;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\ComplainRequest;
use App\Models\FrontDesk\Complain;
use App\Traits\General;
use function __;
use function redirect;
use function view;

class ComplainController extends Controller
{
    use General;
    public function __construct()
    {

        $this->makeDirectory('front-desk');
        $this->makeMultipleDirectories('front-desk', ['documents']);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', Complain::class);
        $records = Complain::with('complainType','source')->orderBy('complain_type_id','ASC')->get();
        $params = [
            'pageTitle' => __('general.complain_list'),
            'records' => $records,
        ];
        return view('dashboard.front-desk.complain.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Complain::class);
        $params = [
            'pageTitle' => __('general.complain_create'),
        ];

        return view('dashboard.front-desk.complain.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ComplainRequest $request)
    {
        $this->authorize('create', Complain::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.complain.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.complain.index')
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
        $this->authorize('view', Complain::class);
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
        $this->authorize('update', Complain::class);

        $model = Complain::findorFail($id);

        $params = [
            'pageTitle' => __('general.complain_edit'),
            'model' => $model,
        ];

        return view('dashboard.front-desk.complain.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ComplainRequest $request, $id)
    {
        $this->authorize('update', Complain::class);

        if ($request->updateData($id)) {
            return redirect()->route('dashboard.complain.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ComplainRequest $request,$id)
    {
        $this->authorize('delete', Complain::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.complain.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
