<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CMS\SliderRequest;
use App\Http\Requests\CMS\TeamRequest;
use App\Services\CMS\SliderService;
use App\Services\CMS\TeamService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class TeamController  extends Controller
{
    public function __construct(
        private TeamService $teamService
    )
    {
        $this->middleware('auth');
    }
    public function index(TeamRequest $request): Factory|View|Application
    {
        $records = $this->teamService->listByPagination();
        $params = [
            'pageTitle' => __('general.team'),
            'records' => $records,
        ];
        return view('cms.team.index',$params);
    }
    public function create(TeamRequest $request): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_team'),
        ];
        return view('cms.team.create', $params);
    }
    public function store(TeamRequest $request)
    {
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('cms.teams.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('cms.teams.index')
                    ->with('success', __('general.record_created_successfully'));
            }

        }
    }
    public function edit($id): Factory|View|Application
    {
        $model = $this->teamService->findById($id);
        $params = [
            'pageTitle' => __('general.edit_team'),
            'model' => $model,
        ];
        return view('cms.team.edit', $params);
    }
    public function update(TeamRequest $request, $id)
    {
        $model = $this->teamService->findById($id);
        if ($request->updateData($model)) {
            if ($request->saveNew) {
                return redirect()->route('cms.teams.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('cms.teams.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }
    public function destroy(TeamRequest $request, int $id)
    {
        $model = $this->teamService->findById($id);
        if ($request->deleteData($model)) {
            return redirect()->route('cms.teams.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
