<?php

namespace App\Http\Requests\CMS;

use App\Enum\MethodEnum;
use App\Enum\TableEnum;
use App\Models\CMS\Page;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        if (
            $this->isMethod(MethodEnum::POST)
            ||
            $this->isMethod(MethodEnum::PUT)
        ) {
            $edit_id = $this->model_id;
            if (isset($edit_id)) {
                $data['code'] = ['required', Rule::unique(TableEnum::CMS_PAGES)->ignore($edit_id)];
            } else {
                $data['code'] = ['required', Rule::unique(TableEnum::CMS_PAGES)];
            }
            return $data;
        } else {
            return array();
        }
    }

    public function createData()
    {
        $page =  Page::create($this->all());
        $this->saveBannerImage($page);
    }

    public function updateData($model)
    {
        $page =  $model->update($this->all());
        $this->saveBannerImage($page);
    }

    public function deleteData($model)
    {
        $model->deleted_by = Auth::id();
        $model->save();
        $model->delete();
    }

    private function saveBannerImage($page)
    {
        if ($this->has('banner_image')) {
            $banner_image = $this->file('banner_image');
            $banner_image_name = GeneralService::generateFileName($banner_image);
            $banner_image_path = 'uploads/pages/' . $banner_image_name;
            $banner_image->move('uploads/pages/', $banner_image_name);
            $page->banner_image = $banner_image_path;
            $page->save();
        }
    }
}
