<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:projects',
            'category' => 'required',
            'slug' => 'required',
            'github' => 'required',
            'description' => 'required',
            'cover_1' => 'required',
            'cover_2' => 'required',
            'cover_3' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Este nombre ya se encuentra en uso',
            'name.required' => 'El nombre es requerido',
            'category.required' => 'La categoria es requerida',
            'slug.required' => 'El slug es requerido',
            'github.required' => 'El enlace a Github es requeirdo',
            'description.required' => 'La descripción es requerida',
            'cover_1.required' => 'La imágen es requerida',
            'cover_2.required' => 'La imágen es requerida',
            'cover_3.required' => 'La imágen es requerida',
        ];
    }
}
