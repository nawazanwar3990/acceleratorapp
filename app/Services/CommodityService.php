<?php

namespace App\Services;

use App\Models\Accounts\AccountHead;
use App\Models\Definition\General\CommodityType;
use function __;

class CommodityService
{
    public static function getCommodityTypesForDropdown(){
//        return CommodityType::where('status', true)->where('parent_id', '0')
//            ->orderBy('name','ASC')->pluck('name','id');
        return [
            'fixed' => 'Fixed Assets',
            'movable' => 'Movable Assets',
            'other' => 'Other Assets',
        ];
    }

    public static function getCommoditySubTypesForDropdown(){
        return CommodityType::where('status', true)->where('parent_id', '!=', '0')
            ->orderBy('name','ASC')->pluck('name','id');
    }

    public static function getCommoditySubTypesForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        $html = '<option value>' . __('general.ph_commodity_sub_type') . '</option>';
        $commodityTypeID = $request->get('commodityType');
        if ($request->ajax()) {
//            $records = CommodityType::where('status', true)->where('parent_id', $commodityTypeID)->orderBy('name', 'ASC')->select('name', 'id')->get();
            $records = match ($commodityTypeID) {
                'fixed' => [
                    'agri_land' => 'Agricultural Land',
                    'plot' => 'Plot',
                    'shop' => 'Shop',
                ],
                'other' => [
                    'gold' => 'Gold',
                ],
                'movable' => [
                    'bus' => 'Bus',
                    'car' => 'Car',
                    'motor_bike' => 'Motor Bike',
                    'tractor' => 'Tractor',
                    'truck' => 'Truck',
                    'van' => 'Van',
                ],
            };
            foreach ($records as $key => $value) {
                $html .= '<option value="' . $key . '">' . $value . '</option>';
            }
            $output = ['success' => true, 'msg' => '', 'records' => $html];
        }

        return $output;
    }

    public static function getCommodityConstructionStatusForDropDown($id = null) {
        $data = [
            'domestic' => __('general.domestic'),
            'commercial' => __('general.commercial')
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getCommodityPropertyTypeForDropDown($id = null) {
        $data = [
            'domestic' => __('general.domestic'),
            'commercial' => __('general.commercial')
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getCommodityInFormOfForDropDown($id = null) {
        $data = [
            'processed' => __('general.processed'),
            'raw' => __('general.raw')
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getFixedCommodityUnitsForDropDown($id = null) {
        $data = [
            'marla' => __('general.marla'),
            'kanal' => __('general.kanal'),
            'acre' => __('general.acre'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function getAssetCommodityUnitsForDropDown($id = null) {
        $data = [
            'milligram' => __('general.milligram'),
            'gram' => __('general.gram'),
            'tola' => __('general.tola'),
            'kg' => __('general.kg'),
            'liter' => __('general.liter'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function createCommodityAccountHead($headName) {
        $parentAccount = AccountHead::where('HeadCode', '10101')->firstOrFail();
        $headCode = (new AccountHead)->headCode('10101');
        $data = AccountHead::create([
            'HeadCode'         => $headCode,
            'HeadName'         => $headName,
            'PHeadName'        => $parentAccount->HeadName,
            'HeadLevel'        => ($parentAccount->HeadLevel + 1),
            'IsActive'         => '1',
            'IsTransaction'    => '1',
            'IsGL'             => '0',
            'HeadType'         => $parentAccount->HeadType,
            'IsBudget'         => '0',
            'IsDepreciation'   => '0',
            'DepreciationRate' => '0',
            'building_id'      => BuildingService::getBuildingId(),
        ]);
        $data->HeadName = ($data->id . "-" . $headName );
        $data->save();
        return $data;
    }
}
