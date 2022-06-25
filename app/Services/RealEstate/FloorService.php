<?php
namespace App\Services\RealEstate;

use App\Models\Definition\FloorType;
use App\Models\Flat;
use App\Models\Floor;

class FloorService
{
    public static function getFloorTypesForDropdown() {
        return FloorType::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getNoOfShopsForDropdown($id = null) {
        for($i = 1; $i <= 100; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)){
            $data = $data[$id];
        }
        return $data;
    }

    public static function getFloorsForDropdown() {
        return Floor::whereBuildingId(BuildingService::getBuildingId())
            ->orderBy('floor_name', 'ASC')->pluck('floor_name', 'id');
    }

    public static function getFlatsOfFloorForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '<option value>' . __('general.ph_flat_name') . '</option>';
        $floorID = $request->get('floorID');
        $buildingID = $request->get('buildingID');
        if ($request->ajax()) {
            $records = Flat::whereBuildingId(BuildingService::getBuildingId())
                ->where('sales_status', $request->get('status', 'open'))
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
        return Floor::whereBuildingId($building_id)->select('floor_name','id')->get();
    }

    public static function getFloorDetailsForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $floorID = $request->get('floorID');
            $record = Floor::whereBuildingId(BuildingService::getBuildingId())->findOrFail($floorID);
            $availableArea = Flat::whereBuildingId(BuildingService::getBuildingId())->where('floor_id', $record->id)->sum('area');

            $output = ['success' => true, 'msg' => '', 'model' => $record, 'availableArea' => ($record->area - $availableArea)];
        }
        return $output;
    }
}
