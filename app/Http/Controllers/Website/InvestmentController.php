<?php

namespace App\Http\Controllers\Website;

use App\Enum\InvestmentStepEnum;
use App\Http\Controllers\Controller;
use App\Models\Investment;
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

        $data = $request->all();

        $model = new Investment();
        $email = $request->input('email');

        $current_step = $request->input('current_step');
        Session::put('apply_investment', true);

        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
            $model->update($data);
            $this->manageFile($model);
        } else {
            $model->create($data);
            $this->manageFile($model);
        }
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
                Session::remove('investment_email');
                break;
        }
        return redirect()->to($next_step)
            ->with('success', __('general.record_created_successfully'));
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

