<?php

namespace App\Http\Controllers;

use App\Enum\KeyWordEnum;
use App\Services\BuildingService;
use App\Services\FloorService;
use App\Services\OfficeService;
use App\Services\PlanService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BookingController extends Controller
{
    public function __construct(
        private BuildingService $buildingService,
        private FloorService    $floorService,
        private OfficeService   $flatService,
        private PlanService     $planService,
    )
    {
        $this->middleware('auth');
    }

    public function showBookingForm(
        Request $request,
                $type = null,
                $id = null,
                $planId = null
    ): View|Factory|Redirector|Application|RedirectResponse
    {
        $model = null;
        switch ($type) {
            case KeyWordEnum::BUILDING:
                $model = $this->buildingService->findById($id);
                break;
            case KeyWordEnum::FLOOR:
                $model = $this->floorService->findById($id);
                break;
            case KeyWordEnum::FLAT:
                $model = $this->flatService->findById($id);
                break;
        }
        $pageTitle = trans('general.booking_form');
        $plan = $this->planService->findById($planId);
        return view('website.booking.' . $type, compact(
            'pageTitle',
            'model',
            'type',
            'plan'
        ));
    }

    public function pricingPlans(Request $request, $type = null, $id = null): View|Factory|Redirector|Application|RedirectResponse
    {
        $model = null;
        switch ($type) {
            case KeyWordEnum::BUILDING:
                $model = $this->buildingService->findById($id);
                break;
            case KeyWordEnum::FLOOR:
                $model = $this->floorService->findById($id);
                break;
            case KeyWordEnum::FLAT:
                $model = $this->flatService->findById($id);
                break;
        }
        $plans = $this->planService->listPlans($type,$model);
        $pageTitle = __('general.installment_plans');
        return view('website.booking.pricing-plans', compact('pageTitle', 'model', 'plans', 'type'));
    }
}
