<?php
namespace App\Services\RealEstate;

use App\Models\Definition\General\District;

class DistrictService
{
    public static function districtDropDown(){
        return District::orderBy('id','ASC')->whereStatus(1)->pluck('name','id');
    }
}
