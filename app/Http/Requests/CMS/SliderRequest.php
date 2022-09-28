<?php

namespace App\Http\Requests\CMS;

use App\Models\CMS\Slider;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SliderRequest extends FormRequest
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
        $slider = Slider::create($this->all());
        $this->saveFrontImage($slider);
        $this->saveBackImage($slider);
        return $slider;
    }

    public function updateData($slider)
    {
        $slider->update($this->all());
        $this->saveFrontImage($slider);
        $this->saveBackImage($slider);
        return $slider;
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
            $image_path = 'uploads/sliders/' . $image_name;
            $image->move('uploads/sliders/', $image_name);
            $page->front_image = $image_path;
            $page->save();
        }
    }

    private function saveBackImage($page)
    {
        if ($this->has('back_image')) {
            $image = $this->file('back_image');
            $image_name = GeneralService::generateFileName($image);
            $image_path = 'uploads/sliders/' . $image_name;
            $image->move('uploads/sliders/', $image_name);
            $page->back_image = $image_path;
            $page->save();
        }
    }
}
