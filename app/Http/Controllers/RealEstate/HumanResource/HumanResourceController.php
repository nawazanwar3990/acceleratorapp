<?php

namespace App\Http\Controllers\RealEstate\HumanResource;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\HumanResource\HrRequest;
use App\Models\RealEstate\HumanResource\Hr;
use App\Models\RealEstate\Media;
use App\Services\Accounts\VoucherService;
use App\Services\RealEstate\BuildingService;
use App\Services\RealEstate\HrService;
use App\Traits\General;
use Illuminate\Http\Request;

class HumanResourceController extends Controller
{
    use General;
    public function __construct()
    {

        $this->makeDirectory('HR');
        $this->makeMultipleDirectories('HR', ['documents', 'images', 'signature']);
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('view', Hr::class);
        $records = Hr::whereBuildingId(BuildingService::getBuildingId())
            ->orderBy('first_name','ASC')
            ->get();
        $params = [
            'pageTitle' => __('general.hr_persons'),
            'records' => $records,
        ];

        return view('dashboard.real-estate.human-resource.hr-person.index', $params);
    }

    public function create()
    {
        $this->authorize('create', Hr::class);
        $lastId = Hr::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_hr_persons'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
        ];

        return view('dashboard.real-estate.human-resource.hr-person.create', $params);
    }

    public function store(HrRequest $request)
    {
        $this->authorize('create', Hr::class);
        if ($request->createData()){
            if ($request->saveNew) {
                return redirect()->route('dashboard.human-resource.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.human-resource.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    public function show($id)
    {
        $this->authorize('view', Hr::class);
        $model = Hr::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        $params = [
            'pageTitle' => __('general.print_hr_persons'),
            'model' => $model,
        ];
        return view('dashboard.real-estate.human-resource.hr-person.print-form',$params);
    }

    public function edit($id)
    {
        $this->authorize('update', Hr::class);
        $model = Hr::whereBuildingId(BuildingService::getBuildingId())->findorFail($id);
        $firstImage = Media::whereBuildingId(BuildingService::getBuildingId())
            ->where('record_type', 'hr_first_image')->where('record_id', $model->id)->first();
        $secondImage = Media::whereBuildingId(BuildingService::getBuildingId())
            ->where('record_type', 'hr_second_image')->where('record_id', $model->id)->first();
        $thirdImage = Media::whereBuildingId(BuildingService::getBuildingId())
            ->where('record_type', 'hr_third_image')->where('record_id', $model->id)->first();
        $fourthImage = Media::whereBuildingId(BuildingService::getBuildingId())
            ->where('record_type', 'hr_fourth_image')->where('record_id', $model->id)->first();
        $signature = Media::whereBuildingId(BuildingService::getBuildingId())
            ->where('record_type', 'hr_signature')->where('record_id', $model->id)->first();
        $document = Media::whereBuildingId(BuildingService::getBuildingId())
            ->where('record_type', 'hr_document')->where('record_id', $model->id)->first();
        $params = [
            'pageTitle' => __('general.edit_hr_persons'),
            'model' => $model,
            'firstImage' => is_null($firstImage) ? '' : $firstImage->filename,
            'secondImage' => is_null($secondImage) ? '' : $secondImage->filename,
            'thirdImage' => is_null($thirdImage) ? '' : $thirdImage->filename,
            'fourthImage' => is_null($fourthImage) ? '' : $fourthImage->filename,
            'signature' => is_null($signature) ? '' : $signature->filename,
            'document' => is_null($document) ? '' : $document->filename,
        ];

        return view('dashboard.real-estate.human-resource.hr-person.edit', $params);
    }

    public function update(HrRequest $request, $id)
    {
        $this->authorize('update', Hr::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.human-resource.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    public function destroy(HrRequest $request, $id)
    {
        $this->authorize('delete', Hr::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.human-resource.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getHrDetails(Request $request) {
        return HrService::getHrDetails($request);
    }

    public function getHrDetailsForEmployee(Request $request) {
        return HrService::getHrDetailsForEmployee($request);
    }

    public function HrPickerTable(Request $request) {
        $data = [];
        $draw = $request->get('draw');
        $row = $request->get('start');
        $rowPerPage = $request->get('length'); // Rows display per page
        $orderColumnIndex = $request->get('order')[0]['column']; // Column index
        $orderColumnName = $request->get('columns')[$orderColumnIndex]['data']; // Column name
        if ($orderColumnName == 'button') {
            $orderColumnName = 'first_name';
        }
        $columnSortOrder = $request->get('order')[0]['dir']; // asc or desc
        $searchValue = $request->get('search')['value']; // Search value

        // Search
        $recordsTotal = Hr::whereBuildingId(BuildingService::getBuildingId())
            ->count();

        $recordsFiltered = Hr::whereBuildingId(BuildingService::getBuildingId())
            ->where(function($query) use ($searchValue) {
                $query->where('first_name', 'like', "%$searchValue%")
//                    ->where('middle_name', 'like', "%$searchValue%")
                    ->orWhere('last_name', 'like', "%$searchValue%")
                    ->orWhere('cell_1', 'like', "%$searchValue%")
                    ->orWhere('cnic', 'like', "%$searchValue%");
            })
            ->orderBy($orderColumnName, $columnSortOrder)
            ->offset($row)->take($rowPerPage)
            ->get();

        foreach ($recordsFiltered as $record) {

            $data[] = [
                "first_name" => $record->first_name,
                "middle_name" => $record->middle_name,
                "last_name" => $record->last_name,
                "id" => $record->id,
//                'present_linear_address' => $record->present_linear_address,
                'cell_1' => $record->cell_1,
                'image' => '<img src="' . HrService::getHrFirstPicture($record->id) . '" class="img-responsive-small" />',
                'cnic' => $record->cnic,
                "button"=>'<button type="button" class="btn btn-primary btn-sm" onclick="pickHr(' . $record->id .  ');"><i class="fas fa-paper-plane"></i></button>',
            ];
        }

        // Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $recordsTotal,
            "iTotalDisplayRecords" => $recordsFiltered->count(),
            "aaData" => $data
        );

        echo json_encode($response);
    }

    public function addHrAjax(Request $request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $record = Hr::create($request->all());
            VoucherService::updateNumber('HR');
            $output = ['success' => true, 'msg' => '', 'data' => $record];
        }

        return $output;
    }
}
