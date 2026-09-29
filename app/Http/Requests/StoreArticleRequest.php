<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    protected function prepareForValidation(): void
    {
        if ($this->has('tags') && is_string($this->tags)) {
            $this->merge([
                'tags' => array_map('trim', explode(',', $this->tags)),
            ]);
        }
    }
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'banner_image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'images' => ['required', 'array', 'size:4'],
            'images.*' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'tags' => ['required', 'array', 'min:1'],
            'tags.*' => ['string', 'max:50'],
        ];
    }
        public function messages(): array
    {
        return [
            'images.size'   => 'Нужно загрузить ровно 4 картинки.',
            'tags.min'      => 'Укажите хотя бы один тег.',
            'banner_image.image' => 'Баннер должен быть изображением.',
            'images.*.image'     => 'Каждый файл должен быть изображением.',
        ];
    }
}
