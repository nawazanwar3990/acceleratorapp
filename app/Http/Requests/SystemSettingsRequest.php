<?php

namespace App\Http\Requests;

use App\Models\Setting;
use App\Services\GeneralService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class SystemSettingsRequest extends FormRequest
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
        $model = Setting::find('1')->update($this->all());
        $this->saveCurrencyFormat();
        $this->saveCurrencyPosition();
        $this->savePrintTheme();
        if ($model){
            return true;
        }
        return false;
    }

    function saveCurrencyPosition(){
        Session::put([
            'currencyPosition' => $this->currency_symbol_position,
        ]);
    }

    public function saveCurrencyFormat()
    {
        Session::put([
            'currencySymbol' => GeneralService::currencySymbols( $this->currency_format ),
        ]);
    }

    public function savePrintTheme()
    {
        $model = Setting::find(1);
        $printHeader = null;
        $printFooter = null;
        if ($model->print_template == 'template-1') {
            $printHeader = "layouts.print-templates.template-1.header";
            $printFooter = "layouts.print-templates.template-1.footer";
        } elseif ($model->print_template == 'template-2') {
            $printHeader = "layouts.print-templates.template-2.header";
            $printFooter = "layouts.print-templates.template-2.footer";
        }

        Session::put([
            'printHeader' => $printHeader,
            'printFooter' => $printFooter,
        ]);

        return true;
    }
}
