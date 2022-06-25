<?php

namespace App\Http\Requests\RealEstate;

use App\Models\Business;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Intervention\Image\Facades\Image;

class BusinessRequest extends FormRequest
{
    use General;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function updateData() {
        $model = Business::findOrFail(1)->update($this->all());
        if ($model) {
            $model = Business::findOrFail(1);
            $this->uploadMedia($model);
            session()->put('business', $model);
        }
        return $model;
    }

    private function uploadMedia($businessModel) {
        if ($this->file('logo')) {
            $uploadedFile = $this->file('logo');
//            $filename = $this::generateFileName($uploadedFile);
//            $path = 'theme/images/business/' . $filename;
            $name = General::generateFileName($uploadedFile);
            $image = Image::make($uploadedFile);
            $path = 'uploads/business/' . $name;
            $image->save(public_path($path));
//            $uploadedFile->move('theme/images/business', $filename);
            $businessModel->logo = $path;
            $businessModel->save();
        }
    }
}
