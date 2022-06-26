<?php

namespace App\Services;

use App\Models\FlatManagement\Flat;
use App\Models\FlatManagement\FlatOwner;
use App\Models\FlatManagement\FlatType;
use function __;
use function response;
use function view;

class FlatService
{
    public static function getFlatTypesForDropdown()
    {
        return FlatType::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getFlatViewsForDropdown($id = null)
    {
        $data = [
            1 => __('general.front_view'),
            2 => __('general.back_view'),
            3 => __('general.balcony_view'),
            4 => __('general.lake_view'),
            5 => __('general.pool_side_view'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function flatNoOfAccommodationForDropdown($id = null)
    {
        for ($i = 1; $i < 50; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getFlatOwnerStatus($id = null)
    {
        $data = [
            2 => 'All Owners',
            0 => 'Old Owners',
            1 => 'Active Owners',
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getFlatDetailsForJS($request)
    {
        $generalServices = '';
        $securityServices = '';
        $creationDate = '';
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $buildingID = $request->get('buildingID');
        $floorID = $request->get('floorID');
        $flatID = $request->get('flatID');

        if ($request->ajax()) {
            $record = Flat::where('floor_id', $floorID)->findorFail($flatID);
            foreach ($record->general_services as $key => $service) {
                $generalServices .= '<option value="' . $service . '" selected>' . GeneralService::getServiceName($service) . '</option>';
            }
            foreach ($record->security_services as $key => $service) {
                $securityServices .= '<option value="' . $service . '" selected>' . GeneralService::getServiceName($service) . '</option>';
            }
            $output = ['success' => true, 'msg' => '', 'record' => $record, 'gServices' => $generalServices, 'sServices' => $securityServices, 'creationDate' => GeneralService::formatDate( $record->creation_date)];
        }

        return $output;
    }

    public static function getFlatOwnersForTable($request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $buildingID = $request->get('buildingID');
            $flatID = $request->get('flatID');
            $owners = FlatOwner::where('flat_id', $flatID)
                ->where('status', true)->with('Hr')->get();

            return response()->json(['success' => true, 'msg' => '', 'data' => view('dashboard.sales.components.seller-details-body', compact('owners'))->render()]);
        }

        return response()->json($output);
    }

    public static function FlatForDropdown()
    {
        return Flat::orderBy('flat_name', 'ASC')->get()->pluck('name_number', 'id');
    }

    public static function FlatOwnerForDropdown()
    {
        $all_owners = FlatOwner::with('Hr')
            ->get()->pluck('hr.first_name', 'hr.id');

        $active_owners = FlatOwner::with('Hr')
            ->whereStatus(1)
            ->get()->pluck('hr.first_name', 'hr.id');

        $old_owners = FlatOwner::with('Hr')
            ->whereStatus(0)
            ->get()->pluck('hr.first_name', 'hr.id');

        return [
            'All Owners' => $all_owners,
            'Active Owners' => $active_owners,
            'Old Owners' => $old_owners,
        ];
    }

    public static function getFlatFloorByBuilding($floor_id, $building_id)
    {
        return Flat::whereBuildingId($building_id)
            ->whereFloorId($floor_id)
            ->select('flat_name', 'id')->get();
    }

    public static function getFlatRevisions($request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $flatID = $request->get('flatID');
            $records = Sale::where('flat_id', $flatID)->count();
            $output = ['success' => true, 'msg' => '', 'data' => ($records + 1)];
        }

        return $output;
    }

    public static function getFlatObject($request)
    {

        $data = Flat::where('id', $request->id)
            ->first();
        if ($data) {
            $response = [
                'status' => true,
                'data' => $data,
            ];
            if (isset($data->flat_name)) {
                $response['flat_name'] = $data->flat_name;
            }
            if (isset($data->flat_number)) {
                $response['flat_number'] = $data->flat_number;
            }
            if (isset($data->flat_type_id)) {
                $response['flat_type_id'] = $data->flatType->name;
            }
            if (isset($data->status)) {
                $response['status'] = $data->status;
            }
            if (isset($data->area)) {
                $response['area'] = $data->area;
            }
            if (isset($data->view)) {
                $response['view'] = FlatService::getFlatViewsForDropdown($data->view);
            }
            return response()->json($response);
        } else {
            return response()->json([
                'status' => false
            ]);
        }

    }
}
