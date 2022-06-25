<?php
namespace App\Services;

use App\Models\Definition\General\Tehsil;

class TehsilService
{
    public static function tehsilDropDown(){
        return Tehsil::orderBy('id','ASC')->whereStatus(1)->pluck('name','id');
    }
}
