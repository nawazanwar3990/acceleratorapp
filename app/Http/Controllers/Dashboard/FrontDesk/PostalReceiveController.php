<?php

namespace App\Http\Controllers\Dashboard\FrontDesk;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\PostalReceiveRequest;
use App\Models\FrontDesk\PostalReceive;
use App\Traits\General;
use function __;
use function redirect;
use function view;

class PostalReceiveController extends Controller
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
        $this->authorize('view', PostalReceive::class);
        $records = PostalReceive::orderBy('to_title','ASC')->get();
        $params = [
            'pageTitle' => __('general.postal_receive_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.postal-receive.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', PostalReceive::class);
        $params = [
            'pageTitle' => __('general.postal_receive_create'),
        ];

        return view('dashboard.real-estate.front-desk.postal-receive.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostalReceiveRequest $request)
    {
        $this->authorize('create', PostalReceive::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.postal-receive.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.postal-receive.index')
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
        $this->authorize('view', PostalReceive::class);
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
        $this->authorize('update', PostalReceive::class);
        $model = PostalReceive::findorFail($id);

        $params = [
            'pageTitle' => __('general.postal_receive_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.postal-receive.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostalReceiveRequest $request, $id)
    {
        $this->authorize('update', PostalReceive::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.postal-receive.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PostalReceiveRequest $request,int $id)
    {
        $this->authorize('delete', PostalReceive::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.postal-receive.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
