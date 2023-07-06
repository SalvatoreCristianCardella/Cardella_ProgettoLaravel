<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:255',
            'author' => 'required|min:2|max:255',
            'description' => 'required|min:10|max:2000',
            'img' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ];
    }
    // public function messages(): array
    // {
    //     return [
    //         'title.required' => "Il campo titolo è obbligatorio",
    //         'description.required' => "Il campo description è obbligatorio",
    //     ];
    // } dovresti andare a scrivere tutti i casi possibili(non è consigliato), invece noi dobbiamo utilizzare i metodi if endif nel form e anche le classi errore
}
