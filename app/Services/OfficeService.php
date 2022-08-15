<?php

namespace App\Services;

use App\Enum\RoleEnum;
use App\Models\Office;
use App\Models\OfficeType;
use App\Models\Subscription;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use function __;

class OfficeService
{

    public static function get_subscribed_id($office_id): bool
    {
        $query = Subscription::where('model_id', $office_id);
        if ($query->exists()) {
            return $query->value('model_id');
        }
    }

    public static function already_subscribed($office_id): bool
    {
        $query = Subscription::where('model_id', $office_id);
        if ($query->exists()) {
            return true;
        } else {
            return false;
        }
    }
    public static function getAvailableOffices()
    {
        return Office::where('created_by', Auth::id())
            ->orderBy('name', 'ASC')
            ->get();
    }
    public static function getOfficeForDropdown()
    {
        return Office::where('created_by', Auth::id())->orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function office_types_dropdown()
    {
        return OfficeType::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public static function office_views_dropdown($id = null)
    {
        $data = [
            1 => __('general.front_view'),
            2 => __('general.back_view'),
            3 => __('general.balcony_view'),
            4 => __('general.lake_view'),
            5 => __('general.pool_side_view'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function sitting_capacity_dropdown($id = null)
    {
        for ($i = 1; $i < 50; $i++) {
            $data[$i] = $i;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function facingDropdown($id = null)
    {
        $data = [
            1 => __('general.east'),
            2 => __('general.west'),
            3 => __('general.south'),
            4 => __('general.north'),
            5 => __('general.north_east'),
            6 => __('general.north_west'),
            7 => __('general.south_east'),
            8 => __('general.south_west'),
        ];
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }

    public static function total_offices()
    {
        return Office::where('created_by', Auth::id())->count();
    }

    public function listOfficesByPagination(): LengthAwarePaginator
    {
        $offices = Office::with('building', 'floor', 'images','plans','plans.basic_services','plans.additional_services');
        if (request()->has('bId')) {
            $offices = $offices->whereHas('building', function ($q) {
                $building_id = request()->query('bId');
                $q->where('buildings.id', $building_id);
            });
        }
        if (request()->has('fId')) {
            $offices = $offices->whereHas('floor', function ($q) {
                $floor_id = request()->query('fId');
                $q->where('floors.id', $floor_id);
            });
        }
        if (\auth()->user() && \auth()->user()->hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $offices = $offices->whereCreatedBy(Auth::id());
        }
        return $offices->paginate(20);
    }

    public function findById($id)
    {
        return Office::find($id);
    }

    public function listOfficeTypeByPagination()
    {
        $records = OfficeType::orderBy('name', 'ASC');
        if (\auth()->user() && \auth()->user()->hasRole(RoleEnum::BUSINESS_ACCELERATOR)) {
            $records = $records->whereCreatedBy(Auth::id());
        }
        return $records->paginate(20);
    }
}
