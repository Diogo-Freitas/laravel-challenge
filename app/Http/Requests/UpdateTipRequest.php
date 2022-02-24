<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTipRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->route('tip')->user_id == auth()->user()->id ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vehicle'   =>  ['required', Rule::exists('vehicles', 'id')],
            'brand'     =>  ['required', Rule::exists('vehicle_brands', 'id')],
            'model'     =>  ['required', Rule::exists('vehicle_models', 'id')->where(function ($query) {
                return $query->where('brand_id', $this->brand);
            })],
            'version'   =>  ['nullable', 'string', 'max:100'],
            'tip'       =>  ['required', 'string', 'max:1000'],
        ];
    }

        /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(){
        return [
            'vehicle'   =>  'Veículo',
            'brand'     =>  'Marca',
            'model'     =>  'Modelo',
            'version'   =>  'Versão',
            'tip'       =>  'Dica',
        ];
    }
}
