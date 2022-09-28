<?php

namespace App\Http\Requests\CMS;

use App\Models\CMS\HowItWork;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HowItWorkRequest extends FormRequest
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
        $work = HowItWork::create($this->all());
        $this->saveImage($work);
        return $work;
    }

    public function updateData($work)
    {
        $work->update($this->all());
        $this->saveImage($work);
        return $work;
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
            $image_path = 'uploads/works/' . $image_name;
            $image->move('uploads/works/', $image_name);
            $page->image = $image_path;
            $page->save();
        }
    }

}
