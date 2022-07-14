<?php

namespace App\Http\Controllers;

use App\Models\WorkingSpace\Floor;
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
                $html .= "<option value=".$floor->id.">".$floor->name."</option>";
            }
        }
        return $html;
    }
}
