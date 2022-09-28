<?php

namespace App\Http\Requests\CMS;

use App\Models\CMS\Slider;
use App\Models\CMS\Team;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return array();
    }

    public function createData()
    {
        $team = Team::create($this->all());
        $this->saveImage($team);
        return $team;
    }

    public function updateData($team)
    {
        $team->update($this->all());
        $this->saveImage($team);
        return $team;
    }

    public function deleteData($model)
    {
        $model->deleted_by = Auth::id();
        $model->save();
        $model->delete();
    }

    private function saveImage($page)
    {
        if ($this->has('image')) {
            $image = $this->file('image');
            $image_name = GeneralService::generateFileName($image);
            $image_path = 'uploads/teams/' . $image_name;
            $image->move('uploads/teams/', $image_name);
            $page->image = $image_path;
            $page->save();
        }
    }
}
