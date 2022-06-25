<?php

namespace App\Http\Controllers\Dashboard\FrontDesk;

use App\Http\Controllers\Controller;
use App\Http\Requests\RealEstate\FrontDesk\VisitorBookRequest;
use App\Models\FrontDesk\VisitorBook;
use App\Traits\General;
use function __;
use function redirect;
use function view;

class VisitorBookController extends Controller
{
    use General;
    public function __construct()
    {

        $this->makeDirectory('front-desk');
        $this->makeMultipleDirectories('front-desk', ['documents']);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('view', VisitorBook::class);
        $records = VisitorBook::with('purpose')->orderBy('name','ASC')->get();
        $params = [
            'pageTitle' => __('general.visitor_book_list'),
            'records' => $records,
        ];
        return view('dashboard.real-estate.front-desk.visitor-book.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', VisitorBook::class);
        $params = [
            'pageTitle' => __('general.visitor_book_create'),
        ];

        return view('dashboard.real-estate.front-desk.visitor-book.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VisitorBookRequest $request)
    {
        $this->authorize('create', VisitorBook::class);
        if ($request->createData()) {
            if ($request->saveNew) {
                return redirect()->route('dashboard.visitor-book.create')
                    ->with('success', __('general.record_created_successfully'));
            } else {
                return redirect()->route('dashboard.visitor-book.index')
                    ->with('success', __('general.record_created_successfully'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', VisitorBook::class);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->authorize('update', VisitorBook::class);
        $model = VisitorBook::findorFail($id);

        $params = [
            'pageTitle' => __('general.visitor_book_edit'),
            'model' => $model,
        ];

        return view('dashboard.real-estate.front-desk.visitor-book.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(VisitorBookRequest $request, int $id)
    {
        $this->authorize('update', VisitorBook::class);
        if ($request->updateData($id)) {
            return redirect()->route('dashboard.visitor-book.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(VisitorBookRequest $request,int $id)
    {
        $this->authorize('delete', VisitorBook::class);
        if ($request->deleteData($id)) {
            return redirect()->route('dashboard.visitor-book.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
