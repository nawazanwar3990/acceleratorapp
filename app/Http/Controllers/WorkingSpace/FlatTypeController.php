<?php

namespace App\Http\Controllers\WorkingSpace;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingSpace\FlatTypeRequest;
use App\Models\WorkingSpace\FlatType;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class FlatTypeController extends Controller
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
        $this->authorize('view', FlatType::class);
        $records = FlatType::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.flat_types'),
            'records' => $records,
        ];
        return view('dashboard.working-spaces.flat-types.index',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', FlatType::class);
        $params = [
            'pageTitle' => __('general.new_flat_types'),
        ];

        return view('dashboard.working-spaces.flat-types.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FlatTypeRequest $request)
    {
        $this->authorize('create', FlatType::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.flat-types.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', FlatType::class);
        $model = FlatType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_flat_types'),
            'model' => $model,
        ];

        return view('dashboard.working-spaces.flat-types.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(FlatTypeRequest $request, $id)
    {
        $this->authorize('update', FlatType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.flat-types.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(FlatTypeRequest $request, $id)
    {
        $this->authorize('delete', FlatType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.flat-types.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
