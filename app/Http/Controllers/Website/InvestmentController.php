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

    public function product(): Factory|View|RedirectResponse|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Add the Basic Info');
        }
        return view('website.investment.product', compact('page', 'model'));
    }

    public function equity(): Factory|View|RedirectResponse|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Add the Basic Info');
        }
        return view('website.investment.equity', compact('page', 'model'));
    }

    public function team(): Factory|View|RedirectResponse|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Add the Basic Info');
        }
        return view('website.investment.team', compact('page', 'model'));
    }

    public function market(): Factory|View|RedirectResponse|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Add the Basic Info');
        }
        return view('website.investment.market', compact('page', 'model'));
    }

    public function curiosity(): Factory|View|RedirectResponse|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Add the Basic Info');
        }
        return view('website.investment.curiosity', compact('page', 'model'));
    }
    public function mentor(): Factory|View|RedirectResponse|Application
    {
        $model = null;
        $page = $this->pageService->findByCode('investment');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
        } else {
            return redirect()->route('website.investment.index')->with('error', 'First Add the Basic Info');
        }
        return view('website.investment.mentor', compact('page', 'model'));
    }

    public function store(Request $request): RedirectResponse
    {

        $data = $request->all();

        $model = new Investment();

        $current_step = $request->input('current_step');
        if (Session::has('apply_investment')) {
            $email = Session::get('investment_email');
            $model = Investment::where('email', $email)->first();
            $model->update($data);
            $this->manageFile($model);
        } else {
            $model->create($data);
            Session::put('investment_email', $request->input('email'));
            $this->manageFile($model);
        }
        Session::put('apply_investment', true);
        $next_step = null;
        $message = null;
        switch ($current_step) {
            case InvestmentStepEnum::WELCOME:
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
                $next_step = route('website.investment.mentor');
                $message = "Curiosity Added successfully Now added Mentor info";
                break;
            case InvestmentStepEnum::MENTOR:
                $next_step = route('website.investment.index');
                $message = "Form Submitted Successfully";
                Session::remove('apply_investment');
                Session::remove('investment_email');
                break;
        }
        return redirect()->to($next_step)
            ->with('success', $message);
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

