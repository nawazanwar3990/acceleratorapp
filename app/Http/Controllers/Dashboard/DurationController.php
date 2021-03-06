<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DurationRequest;
use App\Models\Duration;
use App\Models\Office;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class DurationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Office::class);
        $records = Duration::all();
        $params = [
            'pageTitle' => __('general.durations'),
            'records' => $records,
        ];
        return view('dashboard.subscriptions.durations.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Duration::class);
        $params = [
            'pageTitle' => __('general.new_duration'),
        ];
        return view('dashboard.subscriptions.durations.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(DurationRequest $request)
    {
        $this->authorize('create', Duration::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.durations.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.durations.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Duration::class);
        $model = Duration::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_duration'),
            'model' => $model,
        ];

        return view('dashboard.subscriptions.durations.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(DurationRequest $request, $id)
    {
        $this->authorize('update', Duration::class);
        if ($request->updateData($id)) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.durations.create')
                    ->with('success', __('general.record_updated_successfully'));
            } else {
                return redirect()->route('dashboard.durations.index')
                    ->with('success', __('general.record_updated_successfully'));
            }
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(DurationRequest $request, $id)
    {
        $this->authorize('delete', Duration::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.durations.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
