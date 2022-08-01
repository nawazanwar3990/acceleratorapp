<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Http\Requests\MeetingRequest;
use App\Models\Event;
use App\Models\Meeting;
use App\Traits\General;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function __;
use function redirect;
use function view;

class MeetingRoomController extends Controller
{
    use General;
    public function __construct()
    {
        $this->makeDirectory('meetings');
        $this->makeMultipleDirectories('meetings', ['images']);
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        $records = Meeting::orderBy('id', 'DESC')->get();
        $params = [
            'pageTitle' => __('general.meetings'),
            'records' => $records,
        ];
        return view('dashboard.meetings.index', $params);
    }

    public function create(): Factory|View|Application
    {
        $params = [
            'pageTitle' => __('general.new_meeting'),
        ];
        return view('dashboard.meetings.create', $params);
    }

    public function store(EventRequest $request)
    {
        if ($request->createData()) {
            return redirect()->route('dashboard.meetings.index')
                ->with('success', __('general.record_created_successfully'));
        }
    }
    public function edit($id): Factory|View|Application
    {
        $event = Meeting::findorFail($id);
        $params = [
            'pageTitle' => __('general.edit') . " " . ucwords($event->name),
            'model' => $event
        ];
        return view('dashboard.meetings.edit', $params);
    }
    public function update(MeetingRequest $request)
    {
        if ($request->updateData()) {
            return redirect()->route('dashboard.meetings.index')
                ->with('success', __('general.record_updated_successfully'));
        }
    }
    public function destroy(MeetingRequest $request)
    {
        if ($request->deleteData()) {
            return redirect()->route('dashboard.meetings.index')
                ->with('success', __('general.record_deleted_successfully'));
        }
    }
}
