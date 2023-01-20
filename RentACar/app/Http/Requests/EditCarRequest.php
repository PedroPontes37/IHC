<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCarRequest extends FormRequest
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
            'matricula'=>'required',
              'marca'=>'required',
              'combustivel'=>'required',
              'lugares'=>'required',
              'portas'=>'required',
              'preco'=>'required',
              'url'=>'image|mimes:jpeg,png,jpg,gif|max:2048'
            ];
    }

    public function messages()
    {
        return [
        'matricula.required'=>'A matricula é obrigatoria',
          'marca.required'=>'A marca é obrigatoria',
          'combustivel.required'=>'O tipo de combustivel é obrigatorio',
          'lugares.required'=>'O numero de lugares é obrigatorio',
          'portas.required'=>'O numero de portas é obrigatorio',
         'preco.required'=>'O preço é obrigatorio',
          'url.image'=>'A imagem deve ser uma imagem',
          'url.mimes'=>'A imagem pode ser jpeg,png,jpg,gif.',
          'url.max'=>'A imagem não pode exceder 2MB',
        ];
    }
}
