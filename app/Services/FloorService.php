<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Models\Floor;
use App\Models\FloorType;
use App\Models\Office;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use function __;

class FloorService
{
    public static function floor_types()
    {
        return FloorType::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function no_of_offices_dropdown($id = null)
    {
        for ($i = 1; $i <= 100; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getFloorsForDropdown()
    {
        return Floor::where('created_by', Auth::id())->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getOfficesOfFloorForJS($request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '<option value>' . __('general.ph_flat_name') . '</option>';
        $floorID = $request->get('floorID');
        $buildingID = $request->get('buildingID');
        if ($request->ajax()) {
            $records = Office::where('sales_status', $request->get('status', 'open'))
                ->where('floor_id', $floorID)->orderBy('flat_name', 'ASC')->select('flat_name', 'flat_number', 'id')->get();
            foreach ($records as $record) {
                $html .= '<option value="' . $record->id . '">' . $record->name_number . '</option>';
            }
            $output = ['success' => true, 'msg' => '', 'records' => $html];
        }

        return $output;
    }

    public static function getFloorByBuilding($building_id)
    {
        return Floor::select('floor_name', 'id')->get();
    }

    public static function getFloorDetailsForJS($request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $floorID = $request->get('floorID');
            $record = Floor::findOrFail($floorID);
            $availableArea = Office::where('floor_id', $record->id)->sum('area');

            $output = ['success' => true, 'msg' => '', 'model' => $record, 'availableArea' => ($record->area - $availableArea)];
        }
        return $output;
    }

    public static function total_floors()
    {
        return Floor::where('created_by', Auth::id())->count();
    }

    public function listFloorByPagination(): LengthAwarePaginator
    {
        $floors = Floor::with('building', 'offices', 'type', 'images');
        if (request()->has('bId')) {
            $floors->whereHas('building', function ($q) {
                $building_id = request()->query('bId');
                $q->where('buildings.id', $building_id);
            });
        }
        if (\auth()->user() && \auth()->user()->hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $floors = $floors->whereCreatedBy(Auth::id());
        }
        return $floors->paginate(20);
    }

    public function findById($id)
    {
        return Floor::find($id);
    }

    public function listFloorTypeByPagination()
    {
        $records = FloorType::orderBy('name', 'ASC');
        if (\auth()->user() && \auth()->user()->hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $records = $records->whereCreatedBy(Auth::id());
        }
        return $records->paginate(20);
    }

    public function startup_floors($startup_id, $building_id): LengthAwarePaginator
    {
        $floors = Floor::with('offices', 'building', 'images')
            ->where('created_by', $startup_id);
        if ($building_id) {
            $floors = $floors->where('building_id', $building_id);
        }
        if (request()->query('s')) {
            $keyword = request()->query('s');
            $floors = $floors->where('id', $keyword);
        }
        return $floors->paginate(20);
    }

    public static function available_count_startup_floors($user_id)
    {
        return Floor::where('created_by', $user_id)->count();
    }
}
