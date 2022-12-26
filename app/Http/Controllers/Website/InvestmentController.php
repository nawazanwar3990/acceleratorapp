<?php

namespace App\Http\Controllers\Website;

use App\Enum\AcceleratorTypeEnum;
use App\Enum\InvestmentStepEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Models\Investment;
use App\Notifications\GlobalEmailNotification;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\CMS\PageService;
use Illuminate\Support\Facades\Session;

class InvestmentController extends Controller
{
    use General;

    public function __construct(
        private PageService $pageService,
    )
    {
        $this->makeDirectory('investments');
    }

    public function index(Request $request): Factory|View|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        }
        return view('website.investment.mentor', compact(
            'page',
            'model'
        ));
    }

    public function basic(Request $request): Factory|View|RedirectResponse|Application
    {
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Select Mentor');
        }
        return view('website.investment.basic', compact('page', 'model'));
    }

    public function product(Request $request): Factory|View|RedirectResponse|Application
    {
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Select Mentor');
        }
        return view('website.investment.product', compact('page', 'model'));
    }

    public function equity(Request $request): Factory|View|RedirectResponse|Application
    {
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Select Mentor');
        }
        return view('website.investment.equity', compact('page', 'model'));
    }

    public function team(Request $request): Factory|View|RedirectResponse|Application
    {
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Select Mentor');
        }
        return view('website.investment.team', compact('page', 'model'));
    }

    public function market(Request $request): Factory|View|RedirectResponse|Application
    {
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Select Mentor');
        }
        return view('website.investment.market', compact('page', 'model'));
    }

    public function curiosity(Request $request): Factory|View|RedirectResponse|Application
    {
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Select Mentor');
        }
        return view('website.investment.curiosity', compact('page', 'model'));
    }

    public function mentor(Request $request): Factory|View|RedirectResponse|Application
    {
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Select Mentor');
        }
        return view('website.investment.mentor', compact('page', 'model'));
    }

    public function store(Request $request): RedirectResponse
    {

        $data = $request->all();
        $model = new Investment();
        $current_step = $request->input('current_step');
        if (Session::has('apply_investment')) {
            $model = Investment::find(Session::get('investment_id'));
            $model->update($data);
            $this->manageFile($model);
        } else {
            $model = $model->create($data);
            Session::put('investment_id', $model->id);
            $this->manageFile($model);
        }
        Session::put('apply_investment', true);
        $next_step = null;
        $message = null;
        switch ($current_step) {
            case InvestmentStepEnum::MENTOR:
                $mentor_type = $request->input('mentor_type');
                $mentors = ($mentor_type == AcceleratorTypeEnum::INDIVIDUAL) ? $request->input('ba_individuals', array()) : $request->input('ba_companies', array());
                $model->mentors = $mentors;
                $model->mentor_type = $mentor_type;
                $model->save();
                $next_step = route('website.investment.basic');
                $message = "Mentor added successfully now added Team info";
                break;
            case InvestmentStepEnum::BASIC:
                $next_step = route('website.investment.team');
                $message = "Basic Info Added successfully now added Team info";
                break;
            case InvestmentStepEnum::TEAM:
                $next_step = route('website.investment.product');
                $message = "Team Added successfully now added Product info";
                break;
            case InvestmentStepEnum::PRODUCT:
                $next_step = route('website.investment.market');
                $message = "Product Added successfully now added Market info";
                break;
            case InvestmentStepEnum::MARKET:
                $next_step = route('website.investment.equity');
                $message = "Market Added successfully now added Equity info";
                break;
            case InvestmentStepEnum::EQUITY:
                $next_step = route('website.investment.curiosity');
                $message = "Equity Added successfully Now added Curiosity info";
                break;
            case InvestmentStepEnum::CURIOSITY:
                $next_step = route('website.investment.index');
                $message = "Form Submitted Successfully";
                Session::remove('apply_investment');
                Session::remove('investment_id');
                break;
        }
        return redirect()->to($next_step)->with('success', $message);
    }

    private function manageFile($model)
    {
        if (request()->has('file')) {
            $file = request()->file('file');
            $logoName = GeneralService::generateFileName($file);
            $path = 'uploads/investments/' . $logoName;
            $file->move('uploads/investments/', $logoName);
            $model->file = $path;
            $model->save();
            return $model;
        }
    }
}

