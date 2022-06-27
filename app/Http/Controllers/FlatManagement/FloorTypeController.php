<?php

namespace App\Http\Controllers\FlatManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\FlatManagement\FloorTypeRequest;
use App\Models\FlatManagement\FloorType;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class FloorTypeController extends Controller
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
        $this->authorize('view', FloorType::class);
        $records = FloorType::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.floor_types'),
            'records' => $records,
        ];
        return view('dashboard.flat-management.floor-types.index',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', FloorType::class);
        $params = [
            'pageTitle' => __('general.new_floor_types'),
        ];

        return view('dashboard.flat-management.floor-types.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(FloorTypeRequest $request)
    {
        $this->authorize('create', FloorType::class);
        if ($request->createData()) {
                return redirect()->route('dashboard.floor-types.index')
                    ->with('success', __('general.record_created_successfully'));
            }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', FloorType::class);
        $model = FloorType::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_floor_types'),
            'model' => $model,
        ];

        return view('dashboard.flat-management.floor-types.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(FloorTypeRequest $request, $id)
    {
        $this->authorize('update', FloorType::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.floor-types.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(FloorTypeRequest $request, int $id)
    {$this->authorize('delete', FloorType::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.floor-types.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
