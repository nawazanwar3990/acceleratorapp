<?php

namespace App\Services;

use App\Models\Plan;
use App\Models\Plans\InstallmentTerm;
use App\Models\SaleManagement\Installment;
use function __;

class InstallmentService
{

    public static function getInstallmentPlansForDropdown() {
        return Plan::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function getInstallmentPlanDetailsForJS($request) {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            $planID = $request->get('planID');

            $record = Plan::findorFail($planID);
            $output = ['success' => true, 'msg' => '', 'record' => $record];
        }

        return $output;
    }

    public static function getInstallmentTerm(){
        return InstallmentTerm::first();
    }
    public function listInstallmentByPagination(){
        return Installment::paginate(12);
    }
}
