<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ProductFilterRequest
 */
class FigureFilterRequest extends FormRequest
{
    /**
     * Правила валидации
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'     => 'nullable|string|max:255',
            'price' => 'nullable|',
            'sale' => 'nullable|boolean',
            'tag' => 'nullable|in:top,hit,new,exclusive,sale',
            // 'category' => 'nullable|exists:figure_categories,id',
        ];
    }
}
