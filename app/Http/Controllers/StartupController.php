<?php

namespace App\Http\Controllers;

use App\Enum\AccessTypeEnum;
use App\Models\BA;
use App\Models\Freelancer;
use App\Models\Mentor;
use App\Services\CMS\PageService;
use App\Services\GeneralService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StartupController extends Controller
{
    public function __construct(
        private PageService $pageService
    )
    {

    }

    public function index(Request $request): Factory|View|Application
    {
        $type = $request->query('type', null);
        $type = GeneralService::generateType($type);
        $page = $this->pageService->findByCode('startup');
        $records = null;
        switch ($type) {
            case AccessTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL:
            case AccessTypeEnum::BUSINESS_ACCELERATOR:
                $records = BA::with('user', 'services', 'other_services')
                    ->where('type', $type);
                break;
            case AccessTypeEnum::SERVICE_PROVIDER_COMPANY:
            case AccessTypeEnum::FREELANCER:
                $records = Freelancer::with('user', 'services', 'other_services')
                    ->where('type', $type);
                break;
            case AccessTypeEnum::MENTOR:
                $records = Mentor::with('user', 'services', 'other_services');
                break;
        }
        $records = $records->paginate(20);
        return view('website.startups.index', compact('page', 'records','type'));
    }
}
