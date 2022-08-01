<?php

namespace App\Http\Requests;

use App\Enum\MediaTypeEnum;
use App\Models\Event;
use App\Models\Media;
use App\Services\GeneralService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use function auth;

class EventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }

    public function createData()
    {
        $model = Event::create($this->all());
        if ($model) {
            $this->saveMedia($model);
            $model->save();
        }
        return $model;
    }

    public function updateData()
    {
        $model = Event::findorFail($this->input('model_id'));
        if ($model->update($this->all())) {
            $model = Event::findorFail($this->input('model_id'));
            $this->saveMedia($model);
            $model->save();
        }
        return $model;
    }

    public function deleteData()
    {
        $model = Event::findorFail($this->input('model_id'));
        $model->deleted_by = auth()->id();
        if ($model->save()) {
            return $model->delete();
        }
    }

    public function saveMedia($model)
    {
        $images = $this->file('images', []);
        if (count($images)) {
            foreach ($images as $image) {
                $imageName = GeneralService::generateFileName($image);
                $imagePath = 'uploads/meetings/images/' . $imageName;
                $image->move('uploads/meetings/images', $imageName);
                Media::create(
                    [
                        'record_id' => $model->id,
                        'record_type' => MediaTypeEnum::EVENT_IMAGE,
                        'filename' => $imagePath,
                        'created_by' => Auth::id(),
                        'updated_by' => Auth::id()
                    ]
                );
            }
        }
    }
}
