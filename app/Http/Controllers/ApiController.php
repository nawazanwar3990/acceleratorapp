<?php

namespace App\Http\Controllers;

use App\Enum\AccessTypeEnum;
use App\Models\BA;
use App\Models\Floor;
use App\Models\Freelancer;
use App\Models\Mentor;
use Illuminate\Http\JsonResponse;
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

    public function getUserInfoByIdType($id, $type): JsonResponse
    {
        $html = null;
        $model = null;
        switch ($type) {
            case AccessTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL:
            case AccessTypeEnum::BUSINESS_ACCELERATOR:
                $model = BA::with('user')->find($id);
                if ($type == AccessTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL) {
                    $html = view('ajax.table.ba-individual', compact('model'))->render();
                }
                if ($type == AccessTypeEnum::BUSINESS_ACCELERATOR) {
                    $html = view('ajax.table.ba-individual', compact('model'))->render();
                }
                break;
            case AccessTypeEnum::SERVICE_PROVIDER_COMPANY:
            case AccessTypeEnum::FREELANCER:
                $model = Freelancer::with('user')->find($id);
            if ($type == AccessTypeEnum::SERVICE_PROVIDER_COMPANY) {
                $html = view('ajax.table.service-provider', compact('model'))->render();
            }
            if ($type == AccessTypeEnum::FREELANCER) {
                $html = view('ajax.table.freelancer', compact('model'))->render();
            }
                break;
            case AccessTypeEnum::MENTOR:
                $model = Mentor::with('user')->find($id);
                $html = view('ajax.table.mentor', compact('model'))->render();
                break;
        }
        if ($model) {
            return response()->json([
                'status' => true,
                'html' => $html
            ]);
        } else {
            return response()->json([
                'status' => false
            ]);
        }
    }
}
