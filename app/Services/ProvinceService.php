<?php
namespace App\Services;

use App\Models\Province;

class ProvinceService
{
    public static function provinceDropDown(){
        return Province::orderBy('id','ASC')->whereStatus(1)->pluck('name','id');
    }
}
