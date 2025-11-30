<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'lead' => 'required|string',
            'content' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,webp,png|max:130',
            'category_id' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Заголовок обязателен для заполнения.',
            'title.string' => 'Заголовок должен быть строкой.',
            'lead.required' => 'Заполните краткое описание.',
            'lead.string' => 'Краткое описание должно быть строкой.',
            'lead.max' => 'Длина краткого описания не должна превышать 255 символов.',
            'content.required' => 'Заполните содержимое новости.',
            'image.required' => 'Необходимо выбрать изображение.',
            'image.image' => 'Файл должен быть изображением.',
            'image.mimes' => 'Изображение должно быть в формате: jpg, jpeg, webp, png.',
            'category_id.nullable' => 'Выбор категории не обязателен.',
        ];
    }
}
