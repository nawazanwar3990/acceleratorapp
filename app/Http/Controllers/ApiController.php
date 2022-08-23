<?php

namespace App\Http\Controllers;

use App\Enum\AccessTypeEnum;
use App\Models\BA;
use App\Models\Floor;
use App\Models\Freelancer;
use App\Models\Mentor;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getBuildingFloors(Request $request): string
    {
        $building_id = $request->post('building_id');
        $floors = Floor::whereBuildingId($building_id)->get();
        $html = "<option selected='selected' value=''>" . __('general.select') . "</option>";
        if (count($floors) > 0) {
            foreach ($floors as $floor) {
                $html .= "<option value=" . $floor->id . ">" . $floor->name . "</option>";
            }
        }
        return $html;
    }

    public function getUserInfoByIdType($id, $type)
    {
        $model = null;
        switch ($type) {
            case AccessTypeEnum::BUSINESS_ACCELERATOR:
            case AccessTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL:
                $model = BA::with('user')->find($id);
                break;
            case AccessTypeEnum::FREELANCER:
            case AccessTypeEnum::SERVICE_PROVIDER_COMPANY:
                $model = Freelancer::with('user')->find($id);
                break;
            case AccessTypeEnum::MENTOR:
                $model = Mentor::with('user')->find($id);
                break;
        }
        if ($model) {
            return response()->json([
                'status' => true
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }
}
