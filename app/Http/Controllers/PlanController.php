<?php

namespace App\Http\Controllers;

use App\Enum\AccessTypeEnum;
use App\Enum\StartUpForEnum;
use App\Models\Package;
use App\Services\CMS\PageService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function __construct(
        private PageService       $pageService,
    )
    {

    }
    public function index(Request $request, $plan_for, $plan_type = null): Factory|View|Application
    {
        $page = $this->pageService->findByCode('plan');
        $new_plan_for = $request->segment(2);
        $new_plan_type = $request->segment(3);
        $records = null;
        if ($new_plan_for==StartUpForEnum::BA && $new_plan_type='individual'){
            $records = Package::where('package_type','business_accelerator_individual');
        }else  if ($new_plan_for==StartUpForEnum::BA && $new_plan_type='company'){
            $records = Package::where('package_type','business_accelerator');
        }else  if ($new_plan_for==StartUpForEnum::FREELANCER && $new_plan_type='company'){
            $records = Package::where('package_type',AccessTypeEnum::SERVICE_PROVIDER_COMPANY);
        }else  if ($new_plan_for==StartUpForEnum::BA && $new_plan_type='individual'){
            $records = Package::where('package_type',AccessTypeEnum::FREELANCER);
        }else  if ($new_plan_for==StartUpForEnum::MENTOR ){
            $records = Package::where('package_type',AccessTypeEnum::MENTOR);
        }
        $records = $records->paginate(20);
        return view('website.plans.index', compact('page', 'records', 'plan_for', 'plan_type'));
    }
}
