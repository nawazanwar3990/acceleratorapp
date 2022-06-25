<?php

namespace App\Http\Requests\FrontDesk;

use App\Models\FrontDesk\VisitorBook;
use App\Models\Media;
use App\Services\RealEstate\BuildingService;
use App\Traits\General;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VisitorBookRequest extends FormRequest
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
            'name' => 'required',
            'purpose_id' => 'required',
            'no_person' => 'integer|min:1',
        ];
    }

    public function createData()
    {
        $model = VisitorBook::create($this->all());;
        if ($model) {
            $this->uploadMedia($model);
        }
        return true;
    }

    public function updateData($id)
    {
        $model = VisitorBook::findorFail($id);
        if ($model){
            $this->UpdateUploadMedia($model);
            $model->update($this->all());
        }
        return true;
    }

    public function deleteData($id): bool
    {
        $model = VisitorBook::findorFail($id);
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
                $path = 'uploads/visitor-book/documents/' . $fileName;

                $document->move('uploads/visitor-book/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'visitor_book_document',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }

    private function UpdateUploadMedia($model)
    {
        $deleteData = Media::where('record_type','visitor_book_document')->where('record_id',$model->id)->delete();
        $documents = $this->file('documents', []);
        if (count($documents) || $deleteData) {
            foreach ($documents as $document) {
                $fileName = General::generateFileName($document);
                $path = 'uploads/visitor-book/documents/' . $fileName;

                $document->move('uploads/visitor-book/documents', $fileName);

                Media::create([
                    'filename' => $path,
                    'record_id' => $model->id,
                    'record_type' => 'visitor_book_document',
                    'building_id' => BuildingService::getBuildingId(),
                    'created_by' => Auth::user()->id,
                    'updated_by' => Auth::user()->id,
                ]);
            }
        }
    }
}

