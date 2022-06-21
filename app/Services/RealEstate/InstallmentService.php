<?php

namespace App\Services\RealEstate;

use App\Models\RealEstate\Sales\InstallmentPlan;
use App\Models\RealEstate\Sales\InstallmentTerm;

class InstallmentService
{

    public static function getInstallmentPlansForDropdown() {
        return InstallmentPlan::whereBuildingId(BuildingService::getBuildingId())
            ->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getInstallmentPlanDetailsForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $planID = $request->get('planID');

            $record = InstallmentPlan::whereBuildingId(BuildingService::getBuildingId())->findorFail($planID);
            $output = ['success' => true, 'msg' => '', 'record' => $record];
        }

        return $output;
    }

    public static function getInstallmentTerm(){
        return InstallmentTerm::first();
    }
}
