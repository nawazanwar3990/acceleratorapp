<?php
namespace App\Services;

use App\Models\UserManagement\Country;

class CountryService
{
    public static function countryDropDown(){
        return Country::orderBy('id','ASC')->whereStatus(1)->pluck('name','id');
    }
}
