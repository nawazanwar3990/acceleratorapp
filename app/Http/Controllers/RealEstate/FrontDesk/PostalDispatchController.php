<?php

namespace App\Http\Controllers\RealEstate\FrontDesk;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\PostalDispatchRequest;
use App\Models\RealEstate\FrontDesk\PostalDispatch;
use App\Traits\General;
use Illuminate\Http\Request;

class PostalDispatchController extends Controller
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
        $this->authorize('view', PostalDispatch::class);
        $records = PostalDispatch::orderBy('to_title','ASC')->get();
        $params = [
            'pageTitle' => __('general.postal_dispatch_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.postal-dispatch.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', PostalDispatch::class);
        $params = [
            'pageTitle' => __('general.postal_dispatch_create'),
        ];

        return view('dashboard.real-estate.front-desk.postal-dispatch.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostalDispatchRequest $request)
    {
        $this->authorize('create', PostalDispatch::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.postal-dispatch.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.postal-dispatch.index')
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
        $this->authorize('view', PostalDispatch::class);
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
        $this->authorize('update', PostalDispatch::class);
        $model = PostalDispatch::findorFail($id);

        $params = [
            'pageTitle' => __('general.postal_dispatch_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.postal-dispatch.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostalDispatchRequest $request, $id)
    {
        $this->authorize('update', PostalDispatch::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.postal-dispatch.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PostalDispatchRequest $request,int $id)
    {
        $this->authorize('delete', PostalDispatch::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.postal-dispatch.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
