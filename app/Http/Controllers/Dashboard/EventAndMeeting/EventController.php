<?php

namespace App\Http\Controllers\Dashboard\EventAndMeeting;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventAndMeetings\EventRequest;
use App\Models\EventAndMeetings\Event;
use App\Traits\General;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use General;
    public function __construct()
    {
        $this->makeDirectory('Event');
        $this->makeMultipleDirectories('Event', ['images']);
        $this->middleware('auth');
    }

    public function index()
    {
        $records = Event::orderBy('id', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.events'),
            'records' => $records,
        ];
        return view('dashboard.events-and-meetings.events.index', $params);
    }

    public function create()
    {
        $params = [
            'pageTitle' => __('general.new_event'),
        ];
        return view('dashboard.events-and-meetings.events.create', $params);
    }

    public function store(EventRequest $request)
    {
        if ($request->createData()) {
            return redirect()->route('dashboard.events.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $event = Event::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($event->name),
            'model' => $event
        ];
        return view('dashboard.events-and-meetings.events.edit', $params);
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
