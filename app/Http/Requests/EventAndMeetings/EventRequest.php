<?php

namespace App\Http\Requests\EventAndMeetings;

use App\Models\EventAndMeetings\Event;
use App\Models\Media;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EventRequest extends FormRequest
{
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
        if ($model->save()){
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
                ['record_id' => $model->id, 'record_type' => 'event_image'],
                ['filename' => $path,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id
                ]
            );
        }
    }
}
