<?php

namespace App\Services\RealEstate;

use App\Models\Sales\InstallmentPlan;
use App\Models\Sales\InstallmentTerm;

class InstallmentService
{

    public static function getInstallmentPlansForDropdown() {
        return InstallmentPlan::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getInstallmentPlanDetailsForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $planID = $request->get('planID');

            $record = InstallmentPlan::findorFail($planID);
            $output = ['success' => true, 'msg' => '', 'record' => $record];
        }

        return $output;
    }

    public static function getInstallmentTerm(){
        return InstallmentTerm::first();
    }
}
