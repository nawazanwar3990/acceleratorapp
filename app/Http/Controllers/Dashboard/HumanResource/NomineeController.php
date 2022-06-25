<?php

namespace App\Http\Controllers\Dashboard\HumanResource;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\HumanResource\NomineeRequest;
use App\Models\HumanResource\Nominee;
use App\Models\HumanResource\NomineeVerification;
use App\Models\HumanResource\NomineeWitness;
use App\Models\Media;
use App\Traits\General;
use function __;
use function redirect;
use function view;

class NomineeController extends Controller
{

    use General;
    public function __construct()
    {

        $this->makeDirectory('nominee');
        $this->makeMultipleDirectories('nominee', ['documents', 'images']);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', Nominee::class);
        $records = Nominee::with('hr')->orderBy('owner_hr_id', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.nominee'),
            'records' => $records,
        ];
        return view('dashboard.human-resource.nominee.index',$params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Nominee::class);
        $params = [
            'pageTitle' => __('general.new_nominee'),
        ];

        return view('dashboard.human-resource.nominee.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NomineeRequest $request)
    {
        $this->authorize('create', Nominee::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.nominee.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.nominee.index')
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
        $this->authorize('view', Nominee::class);
        $model = Nominee::findorFail($id);
        $verification = NomineeVerification::whereNomineeId($model->id)->get();
        $witness = NomineeWitness::whereNomineeId($model->id)->get();
        $params = [
            'pageTitle' => __('general.print_nominee'),
            'model' => $model,
            'verification' => $verification,
            'witness' => $witness,
        ];
        return view('dashboard.human-resource.nominee.print-form',$params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->authorize('update', Nominee::class);
        $records = Nominee::findorFail($id);
        $verification = NomineeVerification::whereNomineeId($records->id)->get();
        $witness = NomineeWitness::whereNomineeId($records->id)->get();
        $media = Media::whereRecordId($records->id)->whereRecordType('nominee_document')->get();
        $params = [
            'pageTitle' => __('general.edit_nominee'),
            'records' => $records,
            'model' => $records,
            'verification' => $verification,
            'witness' => $witness,
            'media' => $media,
        ];
        return view('dashboard.human-resource.nominee.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(NomineeRequest $request, int $id)
    {
        $this->authorize('update', Nominee::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.nominee.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(NomineeRequest $request,$id)
    {
        $this->authorize('delete', Nominee::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.nominee.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
