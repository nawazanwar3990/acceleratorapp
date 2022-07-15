<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\HrProfessionRequest;
use App\Models\Users\HrProfession;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class HrProfessionController extends Controller
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
        $this->authorize('view', HrProfession::class);
        $records = HrProfession::orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.profession'),
            'records' => $records,
        ];
        return view('dashboard.user-management.profession.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', HrProfession::class);
        $params = [
            'pageTitle' => __('general.new_profession'),
        ];

        return view('dashboard.user-management.profession.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(HrProfessionRequest $request)
    {
        $this->authorize('create', HrProfession::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.profession.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', HrProfession::class);
        $model = HrProfession::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit_profession'),
            'model' => $model,
        ];
        return view('dashboard.user-management.profession.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(HrProfessionRequest $request, $id)
    {
        $this->authorize('edit', HrProfession::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.profession.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(HrProfessionRequest $request, $id)
    {
        $this->authorize('delete', HrProfession::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.profession.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
