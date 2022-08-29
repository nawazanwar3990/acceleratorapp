<?php

namespace App\Http\Requests\CMS;

use App\Enum\MethodEnum;
use App\Enum\TableEnum;
use App\Models\CMS\Layout;
use App\Models\CMS\Menu;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LayoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return  array();
    }

    public function createData()
    {
        $model = Layout::create($this->all());
        $this->manageImages($model);
        return $model;
    }

    public function updateData($model)
    {
        $model->update($this->all());
        $this->manageImages($model);
        return $model;
    }

    public function deleteData($model)
    {
        $model->deleted_by = Auth::id();
        $model->save();
        $model->delete();
    }

    private function manageImages($model)
    {
        if ($this->has('header_logo')) {
            $header_logo = $this->file('header_logo');
            $header_logo_name = GeneralService::generateFileName($header_logo);
            $header_logo_path = 'uploads/layouts/' . $header_logo_name;
            $header_logo->move('uploads/layouts/', $header_logo_name);
            $model->header_logo = $header_logo_path;
            $model->save();
        }
        if ($this->has('footer_logo')) {
            $footer_logo = $this->file('footer_logo');
            $footer_logo_name = GeneralService::generateFileName($footer_logo);
            $footer_logo_path = 'uploads/layouts/' . $footer_logo_name;
            $footer_logo->move('uploads/layouts/', $footer_logo_name);
            $model->footer_logo = $footer_logo_path;
            $model->save();
        }
        if ($this->has('favicon_logo')) {
            $favicon_logo = $this->file('favicon_logo');
            $favicon_logo_name = GeneralService::generateFileName($favicon_logo);
            $favicon_logo_path = 'uploads/layouts/' . $favicon_logo_name;
            $favicon_logo->move('uploads/layouts/', $favicon_logo_name);
            $model->favicon_logo = $favicon_logo_path;
            $model->save();
        }
    }
}
