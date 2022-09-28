<?php

namespace App\Http\Requests\CMS;

use App\Models\CMS\Descriptive;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DescriptiveRequest extends FormRequest
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
        $descriptive = Descriptive::create($this->all());
        $this->saveFrontImage($descriptive);
        $this->saveBackImage($descriptive);
        return $descriptive;
    }

    public function updateData($descriptive)
    {
        $descriptive->update($this->all());
        $this->saveFrontImage($descriptive);
        $this->saveBackImage($descriptive);
        return $descriptive;
    }

    public function deleteData($model)
    {
        $model->deleted_by = Auth::id();
        $model->save();
        $model->delete();
    }

    private function saveFrontImage($page)
    {
        if ($this->has('front_image')) {
            $image = $this->file('front_image');
            $image_name = GeneralService::generateFileName($image);
            $image_path = 'uploads/descriptive/' . $image_name;
            $image->move('uploads/descriptive/', $image_name);
            $page->front_image = $image_path;
            $page->save();
        }
    }

    private function saveBackImage($page)
    {
        if ($this->has('back_image')) {
            $image = $this->file('back_image');
            $image_name = GeneralService::generateFileName($image);
            $image_path = 'uploads/descriptive/' . $image_name;
            $image->move('uploads/descriptive/', $image_name);
            $page->back_image = $image_path;
            $page->save();
        }
    }
}
