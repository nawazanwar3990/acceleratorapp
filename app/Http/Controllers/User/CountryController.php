<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserManagement\CountryRequest;
use App\Models\Users\Country;
use App\Models\Users\Province;
use App\Services\GeneralService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use function __;
use function redirect;
use function view;

class CountryController extends Controller
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
        $this->authorize('view', Country::class);
        $records = Country::orderBy('name', 'ASC')->get();
        $params = [
            'pageTitle' => __('general.country'),
            'records' => $records,
        ];
        return view('dashboard.user-management.country.index', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function create(): Factory|View|Application
    {
        $this->authorize('create', Country::class);
        $params = [
            'pageTitle' => __('general.new_country'),
        ];

        return view('dashboard.user-management.country.create', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(CountryRequest $request)
    {
        $this->authorize('create', Country::class);
        if ($request->createData()) {
            return redirect()->route('dashboard.country.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function edit($id): Factory|View|Application
    {
        $this->authorize('update', Country::class);
        $model = Country::findorFail($id);

        $params = [
            'pageTitle' => __('general.edit_country'),
            'model' => $model,
        ];
        return view('dashboard.user-management.country.edit', $params);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(CountryRequest $request, $id)
    {
        $this->authorize('update', Country::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.country.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(CountryRequest $request, $id)
    {
        $this->authorize('delete', Country::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.country.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }

    public function getProvincesOfCountry(Request $request)
    {
        $output = ['success' => false, 'msg' => __('general.something_went_wrong')];
        if ($request->ajax()) {
            if ($request->has('countryID')) {
                $countryID = $request->get('countryID');
                $records = Province::where('country_id', $countryID)->orderBy('name', 'ASC')->pluck('name', 'id');
                $output = ['success' => true, 'msg' => '', 'records' => GeneralService::flattenArrayToHtmlSelect($records, __('general.ph_province'))];
            }
        }
        return $output;
    }
}
