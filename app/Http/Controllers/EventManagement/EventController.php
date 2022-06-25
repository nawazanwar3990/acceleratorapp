<?php

namespace App\Http\Controllers\EventManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventManagement\EventRequest;
use App\Models\EventAndMeetings\Event;
use App\Traits\General;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class EventController extends Controller
{
    use General;
    public function __construct()
    {
        $this->makeDirectory('Event');
        $this->makeMultipleDirectories('Event', ['images']);
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        $records = Event::orderBy('id', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.events'),
            'records' => $records,
        ];
        return view('dashboard.event-management.events.index', $params);
    }

    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_event'),
        ];
        return view('dashboard.event-management.events.create', $params);
    }

    public function store(EventRequest $request)
    {
        if ($request->createData()) {
            return redirect()->route('dashboard.events.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }
    public function edit($id): Factory|View|Application
    {
        $event = Event::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($event->name),
            'model' => $event
        ];
        return view('dashboard.event-management.events.edit', $params);
    }
    public function update(EventRequest $request)
    {
        if ($request->updateData()) {
            return redirect()->route('dashboard.plans.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function destroy(EventRequest $request)
    {
        if ($request->deleteData()) {
            return redirect()->route('dashboard.plans.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
