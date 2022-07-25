<?php

namespace App\Http\Controllers\Website;

use App\Enum\StepEnum;
use App\Http\Controllers\Controller;
use App\Models\BA;
use App\Services\BaService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BAController extends Controller
{
    public function __construct(
        private BaService $baService
    )
    {
    }

    public function index()
    {
        //
    }

    public function create(Request $request, $step, $id = null): Factory|View|Application
    {
        $model = null;
        if ($id) {
            $model = BA::find($id);
        }
        return view('website.ba.create', compact('step', 'model'));
    }

    public function store(Request $request, $step, $id = null)
    {
        $model = null;
        if ($id) {
            $model = BA::find($id);
        }
        switch ($step) {
            case StepEnum::STEP1;
                $type = $request->input('type');
                $model = $this->baService->saveStep1($type);
                return redirect()->route('website.ba.create', [StepEnum::STEP2, $model->id]);
                break;
            case StepEnum::STEP2;
                $model = $this->baService->saveStep2($model->type, $model);
                return redirect()->route('website.ba.create', [StepEnum::STEP3, $model->id]);
                break;
            case StepEnum::STEP3;
                $model = $this->baService->saveStep3($model->type, $model);
                return redirect()->route('website.ba.create', [StepEnum::STEP4, $model->id]);
                break;
            case StepEnum::STEP4;
                $request->validate([
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed']
                ]);
                $model = $this->baService->saveStep4($model->type, $model);
                return redirect()->route('website.ba.create', [StepEnum::STEP5, $model->id]);
                break;
            case StepEnum::STEP5;
                $response = $this->baService->saveStep5($model->type);
                return response()->json([
                    'status' => $response,
                    'url' => route('website.ba.create', [StepEnum::PRINT, $model->id])
                ]);
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
