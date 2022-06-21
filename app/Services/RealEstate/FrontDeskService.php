<?php

namespace App\Services\RealEstate;


use App\Models\RealEstate\FrontDesk\FrontDeskSetup\CallType;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\ComplainType;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\Purpose;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\Reference;
use App\Models\RealEstate\FrontDesk\FrontDeskSetup\Source;

class FrontDeskService
{
    public static function referenceDropdown()
    {
        return Reference::pluck('name','id');
    }

    public static function sourceDropdown()
    {
        return Source::pluck('name','id');
    }

    public static function complainTypeDropdown()
    {
        return ComplainType::pluck('name','id');
    }

    public static function purposeDropdown()
    {
        return Purpose::pluck('name','id');
    }

    public static function callTypeDropdown()
    {
        return CallType::pluck('name','id');
    }
}
