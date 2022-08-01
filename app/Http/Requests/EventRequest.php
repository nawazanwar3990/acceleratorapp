<?php

namespace App\Http\Requests;

use App\Enum\MediaTypeEnum;
use App\Models\Event;
use App\Models\Media;
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
        $model = Meeting::create($this->all());
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
        if ($this->file('image')) {
            $documents = $this->file('image');
            $fileName = General::generateFileName($documents);
            $path = 'uploads/Event/images/' . $fileName;
            $documents->move('uploads/Event/images/', $fileName);
            Media::updateOrCreate(
                [
                    'record_id' => $model->id,
                    'record_type' => MediaTypeEnum::EVENT_IMAGE
                ],
                [
                    'filename' => $path,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id()
                ]
            );
        }
    }
}
