<?php

namespace App\Http\Requests\CMS;

use App\Models\CMS\WhatWeOffer;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class WhatWeOfferRequest extends FormRequest
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
        $offer = WhatWeOffer::create($this->all());
        $this->saveImage($offer);
        return $offer;
    }

    public function updateData($offer)
    {
        $offer->update($this->all());
        $this->saveImage($offer);
        return $offer;
    }

    public function deleteData($model)
    {
        $model->deleted_by = Auth::id();
        $model->save();
        $model->delete();
    }

    private function saveImage($page)
    {
        if ($this->has('image')) {
            $image = $this->file('image');
            $image_name = GeneralService::generateFileName($image);
            $image_path = 'uploads/offers/' . $image_name;
            $image->move('uploads/offers/', $image_name);
            $page->image = $image_path;
            $page->save();
        }
    }

}
