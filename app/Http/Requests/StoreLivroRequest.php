<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLivroRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'ano_publicacao' => 'required|integer',
            'descricao' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'O título do livro é obrigatório.',
            'titulo.string' => 'O título deve ser um texto válido.',
            'titulo.max' => 'O título pode ter no máximo 255 caracteres.',

            'autor.required' => 'O autor do livro é obrigatório.',
            'autor.string' => 'O autor deve ser um texto válido.',
            'autor.max' => 'O autor pode ter no máximo 255 caracteres.',

            'categoria.required' => 'A categoria é obrigatória.',

            'ano_publicacao.required' => 'O ano de publicação é obrigatório.',
            'ano_publicacao.integer' => 'O ano de publicação deve ser um número.',

            'descricao.string' => 'A descrição deve ser um texto válido.',
        ];
    }
}
