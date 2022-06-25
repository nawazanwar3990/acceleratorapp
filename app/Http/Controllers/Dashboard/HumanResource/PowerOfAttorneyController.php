<?php

namespace App\Http\Controllers\Dashboard\HumanResource;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\HumanResource\PowerOfAttorneyRequest;
use App\Models\HumanResource\PowerOfAttorney;
use App\Models\HumanResource\PowerOfAttorneyVerification;
use App\Models\HumanResource\PowerOfAttorneyWitness;
use App\Models\Media;
use App\Traits\General;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class PowerOfAttorneyController extends Controller
{
    use General;
    public function __construct()
    {

        $this->makeDirectory('poa');
        $this->makeMultipleDirectories('poa', ['documents', 'images']);
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $this->authorize('view', PowerOfAttorney::class);
        $data = PowerOfAttorney::orderBy('reg_date', 'ASC')->get();
        $pageTitle = __('general.list_poa');
        $viewParams = [
            'pageTitle' => $pageTitle,
            'data' => $data
        ];
        return view('dashboard.real-estate.human-resource.power-of-attorney.index', $viewParams);
    }

    public function create()
    {
        $this->authorize('create', PowerOfAttorney::class);
        $pageTitle = __('general.create_poa');
        $viewParams = [
            'pageTitle' => $pageTitle
        ];
        return view('dashboard.real-estate.human-resource.power-of-attorney.create', $viewParams);
    }

    public function store(PowerOfAttorneyRequest $request): RedirectResponse
    {
        $this->authorize('create', PowerOfAttorney::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.poa.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.poa.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function edit($id)
    {
        $this->authorize('update', PowerOfAttorney::class);
        $data = PowerOfAttorney::findorFail($id);
        $verification = PowerOfAttorneyVerification::wherePoaId($data->id)->get();
        $witness = PowerOfAttorneyWitness::wherePoaId($data->id)->get();
        $media = Media::whereRecordId($data->id)->whereRecordType('poa_document')->get();
        $params = [
            'pageTitle' => __('general.edit_poa'),
            'records' => $data,
            'model' => $data,
            'verification' => $verification,
            'witness' => $witness,
            'media' => $media,
        ];
        return view('dashboard.real-estate.human-resource.power-of-attorney.edit', $params);

    }

    public function update(PowerOfAttorneyRequest $request, $id)
    {
        $this->authorize('update', PowerOfAttorney::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.poa.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(PowerOfAttorneyRequest $request,$id)
    {
        $this->authorize('delete', PowerOfAttorney::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.poa.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

}
