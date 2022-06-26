<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\HrRequest;
use App\Models\Media;
use App\Models\UserManagement\Hr;
use App\Services\PersonService;
use App\Traits\General;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class HumanResourceController extends Controller
{
    use General;
    public function __construct()
    {

        $this->makeDirectory('HR');
        $this->makeMultipleDirectories('HR', ['documents', 'images', 'signature']);
        $this->middleware('auth');
    }

    /**
     * @throws AuthorizationException
     */
    public function index(): Factory|View|Application
    {
        $this->authorize('view', Hr::class);
        $records = Hr::orderBy('first_name','ASC')
            ->get();
        $params = [
            'pageTitle' => __('general.hr_persons'),
            'records' => $records,
        ];

        return view('dashboard.user-management.hr-persons.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Hr::class);
        $lastId = Hr::orderBy('id', 'DESC')->value('id');
        $params = [
            'pageTitle' => __('general.new_hr_persons'),
            'lastId' => (is_null($lastId) ? '1' : $lastId),
        ];

        return view('dashboard.user-management.hr-persons.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(HrRequest $request)
    {
        $this->authorize('create', Hr::class);
        if ($request->createData()){
            return redirect()->route('dashboard.human-resource.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function show($id): Factory|View|Application
    {
        $this->authorize('view', Hr::class);
        $model = Hr::findorFail($id);
        $params = [
            'pageTitle' => __('general.print_hr_persons'),
            'model' => $model,
        ];
        return view('dashboard.user-management.hr-persons.print-form',$params);
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Hr::class);
        $model = Hr::findorFail($id);
        $firstImage = Media::where('record_type', 'hr_first_image')->where('record_id', $model->id)->first();
        $secondImage = Media::where('record_type', 'hr_second_image')->where('record_id', $model->id)->first();
        $thirdImage = Media::where('record_type', 'hr_third_image')->where('record_id', $model->id)->first();
        $fourthImage = Media::where('record_type', 'hr_fourth_image')->where('record_id', $model->id)->first();
        $signature = Media::where('record_type', 'hr_signature')->where('record_id', $model->id)->first();
        $document = Media::where('record_type', 'hr_document')->where('record_id', $model->id)->first();
        $params = [
            'pageTitle' => __('general.edit_hr_persons'),
            'model' => $model,
            'firstImage' => is_null($firstImage) ? '' : $firstImage->filename,
            'secondImage' => is_null($secondImage) ? '' : $secondImage->filename,
            'thirdImage' => is_null($thirdImage) ? '' : $thirdImage->filename,
            'fourthImage' => is_null($fourthImage) ? '' : $fourthImage->filename,
            'signature' => is_null($signature) ? '' : $signature->filename,
            'document' => is_null($document) ? '' : $document->filename,
        ];

        return view('dashboard.user-management.hr-persons.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(HrRequest $request, $id)
    {
        $this->authorize('update', Hr::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.human-resource.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(HrRequest $request, $id)
    {
        $this->authorize('delete', Hr::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.human-resource.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getHrDetails(Request $request): array
    {
        return PersonService::getHrDetails($request);
    }
}
