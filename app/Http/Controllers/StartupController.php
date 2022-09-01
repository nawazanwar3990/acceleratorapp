<?php

namespace App\Http\Controllers;

use App\Enum\StartUpForEnum;
use App\Enum\SubscriptionStatusEnum;
use App\Models\BA;
use App\Models\Freelancer;
use App\Models\Mentor;
use App\Models\User;
use App\Services\BaService;
use App\Services\CMS\PageService;
use App\Services\FreelancerService;
use App\Services\GeneralService;
use App\Services\MentorService;
use App\Services\PersonService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StartupController extends Controller
{
    public function __construct(
        private PageService       $pageService,
        private FreelancerService $freelancerService,
        private BaService         $baService,
        private MentorService     $mentorService
    )
    {

    }

    public function index(Request $request, $startup_for, $startup_type = null)
    {
        $page = $this->pageService->findByCode('startup');
        $records = null;
        switch ($startup_for) {
            case StartUpForEnum::BA:
                $records = BA::whereHas('user', function ($query) {
                    $query->whereHas('subscription', function ($q) {
                        $q->where('subscriptions.status', SubscriptionStatusEnum::APPROVED);
                    });
                })->where('ba.type', $startup_type);
                break;
            case StartUpForEnum::FREELANCER:
                $records = Freelancer::whereHas('user', function ($query) {
                    $query->whereHas('subscription', function ($q) {
                        $q->where('subscriptions.status', SubscriptionStatusEnum::APPROVED);
                    });
                })->where('freelancers.type', $startup_type);
                break;
            case StartUpForEnum::MENTOR:
                $records = Mentor::whereHas('user', function ($query) {
                    $query->whereHas('subscription', function ($q) {
                        $q->where('subscriptions.status', SubscriptionStatusEnum::APPROVED);
                    });
                });
                break;
        }
        $records = $records->paginate(20);
        return view('website.startups.index', compact('page', 'records', 'startup_for', 'startup_type'));
    }

    public function services(
        Request $request,
                $startup_for,
                $startup_type,
                $startup_id): Factory|View|Application
    {
        $page = $this->pageService->findByCode('startup');
        $startup_user = User::find($startup_id);
        $startup_services = PersonService::getStartupServicesForUser($startup_user);
        return view('website.startups.services.index', compact(
            'page',
            'startup_user',
            'startup_for',
            'startup_type',
            'startup_services',
            'startup_id'
        ));
    }
}
