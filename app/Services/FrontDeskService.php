<?php

namespace App\Services;


use App\Models\FrontDesk\FrontDeskSetup\CallType;
use App\Models\FrontDesk\FrontDeskSetup\ComplainType;
use App\Models\FrontDesk\FrontDeskSetup\Purpose;
use App\Models\FrontDesk\FrontDeskSetup\Reference;
use App\Models\FrontDesk\FrontDeskSetup\Source;

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
