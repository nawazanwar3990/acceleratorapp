<?php

namespace App\Http\Requests;

use App\Enum\MediaTypeEnum;
use App\Models\Media;
use App\Models\Meeting;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use function auth;

class MeetingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }

    public function createData()
    {
        $model = Meeting::create($this->all());
        if ($model) {
            $this->saveMedia($model);
            $model->save();
        }
        return $model;
    }

    public function updateData()
    {
        $model = Meeting::findorFail($this->input('model_id'));
        if ($model->update($this->all())) {
            $model = Meeting::findorFail($this->input('model_id'));
            $this->saveMedia($model);
            $model->save();
        }
        return $model;
    }

    public function deleteData()
    {
        $model = Meeting::findorFail($this->input('model_id'));
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
                        'record_type' => MediaTypeEnum::MEETING_IMAGE,
                        'filename' => $imagePath,
                        'created_by' => Auth::id(),
                        'updated_by' => Auth::id()
                    ]
                );
            }
        }
    }
}
