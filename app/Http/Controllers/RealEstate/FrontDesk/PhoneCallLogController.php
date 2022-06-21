<?php

namespace App\Http\Controllers\RealEstate\FrontDesk;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\FrontDeskSetup\CallTypeRequest;
use App\Http\Requests\RealEstate\FrontDesk\PhoneCallLogRequest;
use App\Models\RealEstate\FrontDesk\PhoneCallLog;
use Illuminate\Http\Request;

class PhoneCallLogController extends Controller
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
        $this->authorize('view', PhoneCallLog::class);
        $records = PhoneCallLog::with('callType')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.phone_call_log_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.phone-call-log.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', PhoneCallLog::class);
        $params = [
            'pageTitle' => __('general.phone_call_log_create'),
        ];

        return view('dashboard.real-estate.front-desk.phone-call-log.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PhoneCallLogRequest $request)
    {
        $this->authorize('create', PhoneCallLog::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.phone-call-log.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.phone-call-log.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', PhoneCallLog::class);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->authorize('update', PhoneCallLog::class);
        $model = PhoneCallLog::findorFail($id);

        $params = [
            'pageTitle' => __('general.phone_call_log_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.phone-call-log.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PhoneCallLogRequest $request, $id)
    {
        $this->authorize('update', PhoneCallLog::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.phone-call-log.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PhoneCallLogRequest $request,$id)
    {
        $this->authorize('delete', PhoneCallLog::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.phone-call-log.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
