<?php

namespace App\Http\Requests\FrontDesk;

use App\Models\FrontDesk\PostalReceive;
use App\Models\Media;
use App\Services\BuildingService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostalReceiveRequest extends FormRequest
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
            'to_title' => 'required',
            'from_title' => 'required',
        ];
    }

    public function createData()
    {
        $model = PostalReceive::create($this->all());;
        if ($model) {
            $this->uploadMedia($model);
        }
        return true;
    }

    public function updateData($id)
    {
        $model = PostalReceive::findorFail($id);
        if ($model){
            $this->UpdateUploadMedia($model);
            $model->update($this->all());
        }
        return true;
    }

    public function deleteData($id): bool
    {
        $model = PostalReceive::findorFail($id);
        if ($model) {
            $model->deleted_by = Auth::user()->id;
            $model->save();
            $model->delete();
        }

        return true;
    }

    private function uploadMedia($model)
    {
        $documents = $this->file('documents', []);
        if (count($documents)) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/postal-receive/documents/' . $fileName;

                $document->move('uploads/postal-receive/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'postal_receive_document',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }

    private function UpdateUploadMedia($model)
    {
        $deleteData = Media::where('record_type','postal_receive_document')->where('record_id',$model->id)->delete();
        $documents = $this->file('documents', []);
        if (count($documents) || $deleteData) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/postal-receive/documents/' . $fileName;

                $document->move('uploads/postal-receive/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'postal_receive_document',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }
}
