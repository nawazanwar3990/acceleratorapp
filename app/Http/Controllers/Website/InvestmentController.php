<?php

namespace App\Http\Controllers\Website;

use App\Enum\InvestmentStepEnum;
use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Services\CMS\PageService;
use Illuminate\Support\Facades\Session;

class InvestmentController extends Controller
{
    public function __construct(
        private PageService $pageService,
    )
    {

    }

    public function index(): Factory|View|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        }
        return view('website.investment.index', compact('page', 'model'));
    }

    public function product(): Factory|View|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        }
        return view('website.investment.product', compact('page', 'model'));
    }

    public function equity(): Factory|View|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        }
        return view('website.investment.equity', compact('page', 'model'));
    }

    public function team(): Factory|View|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        }
        return view('website.investment.team', compact('page', 'model'));
    }

    public function market(): Factory|View|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        }
        return view('website.investment.market', compact('page', 'model'));
    }

    public function curiosity(): Factory|View|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        }
        return view('website.investment.curiosity', compact('page', 'model'));
    }

    public function store(Request $request): RedirectResponse
    {
        $model = new Investment();
        $email = $request->input('email');

        $current_step = $request->input('current_step');
        Session::put('apply_investment', true);

        if ($email) {
            Session::put('investment_email', $email);
            $model = Investment::where('email', $email)->first();
        }
        $model->create($request->all());
        $next_step = null;
        switch ($current_step) {
            case InvestmentStepEnum::WELCOME:
                $next_step = route('website.investment.team');
                break;
            case InvestmentStepEnum::TEAM:
                $next_step = route('website.investment.product');
                break;
            case InvestmentStepEnum::PRODUCT:
                $next_step = route('website.investment.market');
                break;
            case InvestmentStepEnum::MARKET:
                $next_step = route('website.investment.equity');
                break;
            case InvestmentStepEnum::EQUITY:
                $next_step = route('website.investment.curiosity');
                break;
            case InvestmentStepEnum::CURIOSITY:
                $next_step = route('website.investment.curiosity');
                Session::remove('apply_investment');
                break;
        }
        return redirect()->to($next_step)
            ->with('success', __('general.record_created_successfully'));
    }
}

