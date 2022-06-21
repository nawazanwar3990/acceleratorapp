<?php
namespace App\Services\RealEstate;

use App\Models\RealEstate\Definition\General\Country;

class CountryService
{
    public static function countryDropDown(){
        return Country::orderBy('id','ASC')->whereStatus(1)->pluck('name','id');
    }
}
