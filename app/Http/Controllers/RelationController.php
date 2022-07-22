<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserManagement\RelationRequest;
use App\Models\Users\HrRelation;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class RelationController extends Controller
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
        $this->authorize('view', HrRelation::class);
        $records = HrRelation::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.relation'),
            'records' => $records,
        ];
        return view('dashboard.user-management.relation.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', HrRelation::class);
        $params = [
            'pageTitle' => __('general.new_relation'),
        ];
        return view('dashboard.user-management.relation.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(RelationRequest $request)
    {
        $this->authorize('create', HrRelation::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.relation.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', HrRelation::class);
        $model = HrRelation::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_relation'),
            'model' => $model,
        ];

        return view('dashboard.user-management.relation.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(RelationRequest $request, $id)
    {
        $this->authorize('update', HrRelation::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.relation.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(RelationRequest $request, $id)
    {
        $this->authorize('delete', HrRelation::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.relation.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
