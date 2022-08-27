<?php

namespace App\Http\Requests\CMS;

use App\Enum\MethodEnum;
use App\Enum\TableEnum;
use App\Models\CMS\Page;
use App\Models\CMS\Section;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SectionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return array();
    }

    public function syncData(): bool
    {
        $page_id = $this->input('page_id');
        $page = Page::find($page_id);
        $page->sections()->delete();
        $data = $this->all();
        $total = $this->input('order', array());
        $db_data = array();
        if (count($total) > 0) {
            for ($i = 0; $i < count($total); $i++) {
                $db_data[] = [
                    'order' => $data['order'][$i],
                    'html' => $data['html'][$i],
                    'created_by' => $this->input('created_by')
                ];
            }
        }
        $page->sections()->createMany($db_data);
        return true;
    }

    public function deleteData($model)
    {
        $model->deleted_by = Auth::id();
        $model->save();
        $model->delete();
    }
}
