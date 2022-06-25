<?php

namespace App\Services\RealEstate;

use App\Enum\TableEnum;
use App\Models\Accounts\Expense;
use App\Models\Building;
use App\Models\BuildingOwner;
use App\Models\Flat;
use App\Models\Floor;
use App\Models\Sales\Installment;
use App\Models\Sales\Sale;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeService
{
    public static function getTotalBuildingCount()
    {
        return Building::count();
    }

    public static function getTotalFlatsCount()
    {
        return Flat::count();
    }

    public static function getTotalFloorsCount()
    {
        return Floor::count();
    }

    public static function getTotalBuildingsOwnerCount()
    {
        return BuildingOwner::count();
    }

    public static function getTotalSoldFlatsCount()
    {
        return Flat::where('sales_status', '!=', 'open')
            ->count();
    }

    public static function getExpenceYearData(mixed $monthNumber)
    {
        return Expense::whereMonth('date', $monthNumber)
            ->whereYear('date', Carbon::now()->year)
            ->whereIsPaid(true)
            ->sum('amount');
    }

    public static function getAllMonthName()
    {
        return [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];
    }

    public static function expenceChartYearly()
    {
        $expensesArray = [];
        foreach (HomeService::getAllMonthName() as $month) {
            $date = Carbon::createFromFormat('M', $month);
            $monthNumber = $date->format('m');

            $data_expence_chart = HomeService::getExpenceYearData($monthNumber);

            $data = array_push($expensesArray, $data_expence_chart);
        }
        return $expensesArray;
    }

    public static function daysInMonth($month)
    {
        $totalDays = Carbon::now()->month($month)->daysInMonth;
        $days = [];
        for ($i = 1; $i <= $totalDays; $i++) {
            $days[] = $i;
        }
        return $days;
    }

    public static function getMonthlyExpenseData($days)
    {
        $data = [];
        foreach ($days as $day) {

            $chartData = Expense::whereDay('date', $day)
                ->whereMonth('date', Carbon::now()->month)
                ->whereIsPaid(true)
                ->sum('amount');

            $data[] = $chartData;
        }
        return $data;
    }

    public static function salesStatistics($forYear = false)
    {
        $records = new Sale();
        if ($forYear === true) {
            $records = $records->whereYear('date', Carbon::today()->year);
        } else {
            $records = $records->whereMonth('date', Carbon::today()->month)
                ->whereYear('date', Carbon::today()->year);
        }

        return [
            'totalSales' => $records->count(),
            'totalSalesAmount' => $records->sum('after_discount_amount'),
            'month' => Carbon::today()->monthName . '-' . Carbon::today()->year,
            'year' => Carbon::today()->year,
        ];
    }

    public static function installmentStatistics()
    {
        $recordsCollectable = Installment::whereMonth('installment_date', Carbon::today()->month)
            ->whereYear('installment_date', Carbon::today()->year)
            ->where('status', 'unpaid')->get();

        $recordsCollection = Installment::whereMonth('installment_date', Carbon::today()->month)
            ->whereYear('installment_date', Carbon::today()->year)
            ->where('status', 'paid')->get();

        return [
            'collectableAmount' => $recordsCollectable->sum('installment_amount'),
            'collectionAmount' => $recordsCollection->sum('installment_amount'),
            'collectableCount' => $recordsCollectable->count(),
            'collectionCount' => $recordsCollection->count(),
            'month' => Carbon::today()->monthName . '-' . Carbon::today()->year,
            'year' => Carbon::today()->year,
        ];

    }

    public static function latestSales()
    {
        return DB::table(TableEnum::SALES . ' as s')
            ->join(TableEnum::FLATS . ' as f', 'f.id', 's.flat_id')
            ->select('s.transfer_no', 's.date', 's.after_discount_amount', 'f.flat_name')
            ->orderBy('s.date', 'DESC')->take(10)->get();

    }
}
