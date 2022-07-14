<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Models\WorkingSpace\Building;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;

class BuildingService
{
    public static function buildingTypesForDropdown($id = null)
    {
        $data = [
            1 => __('general.domestic'),
            2 => __('general.commercial'),
            3 => __('general.office'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function buildingCornersForDropdown($id = null)
    {
        for ($i = 4; $i < 10; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function buildingEntryGatesForDropdown($id = null)
    {
        for ($i = 1; $i < 10; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function buildingPropertyTypesForDropdown($id = null)
    {
        $data = [
            1 => __('general.rented'),
            2 => __('general.own'),
            3 => __('general.lease'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function no_of_floors($id = null)
    {
        for ($i = 1; $i < 30; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }
    public static function no_of_offices($id = null)
    {
        for ($i = 1; $i < 30; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }
    public static function buildingFacingsForDropdown($id = null)
    {
        $data = [
            1 => __('general.east'),
            2 => __('general.west'),
            3 => __('general.south'),
            4 => __('general.north'),
            5 => __('general.north_east'),
            6 => __('general.north_west'),
            7 => __('general.south_east'),
            8 => __('general.south_west'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getFloorsOfBuildingForJS($request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '<option value>' . __('general.ph_floor_name') . '</option>';
        $buildingID = $request->get('buildingID');
        if ($request->ajax()) {
            $records = Floor::whereBuildingId($buildingID)->orderBy('floor_name', 'ASC')->select('floor_name', 'id')->get();
            foreach ($records as $record) {
                $html .= '<option value="' . $record->id . '">' . $record->floor_name . '</option>';
            }
            $output = ['success' => true, 'msg' => '', 'records' => $html];
        }

        return $output;
    }

    public static function getBuildingDropdown()
    {
        return Building::where('created_by',Auth::id())->pluck('name', 'id');
    }

    public static function getBuildingServices($type = 'general')
    {
        $data = Building::find(self::getBuildingId());
        if ($type == 'general') {
            return $data->general_services;
        } else {
            return $data->security_services;
        }
    }

    public function listBuildingsByPagination(): LengthAwarePaginator
    {
        $buildings = Building::with('flats', 'floors', 'images');
        if (\auth()->user() && \auth()->user()->hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $buildings = $buildings->whereCreatedBy(Auth::id());
        }
        return $buildings->paginate(20);
    }

    public function findById($id)
    {
        return Building::find($id);
    }

    public function getBuildingName()
    {
        return $this->name;
    }
}
