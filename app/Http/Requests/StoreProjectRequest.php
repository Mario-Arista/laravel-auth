<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:100',
            'description' => 'required',
            'develop_with' => 'required|max:150',
            'link_github' => 'required',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il nome del progetto deve essere inserito',
            'name.max' => "Il nome del progetto deve avere massimo :max caratteri",

            'description.required' => 'La descrizione del progetto deve essere inserito',

            'develop_with.required' => 'Il campo deve essere inserito',
            'develop_with.max' => "Questo campo deve avere massimo :max caratteri",

            'link_github.required' => 'Il link del progetto deve essere inserito',
            'image.required' => "Il link dell'immagine del progetto deve essere inserito",

        ];
    }
}
