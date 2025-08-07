<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class FigureFilter
{
    protected $builder;

    public function apply(Builder $builder): Builder
    {
        $this->builder = $builder;

        foreach (request()->all() as $name => $value) {
            // dd( $name);
            if (method_exists($this, $name) && !empty($value)) {
                call_user_func_array([$this, $name], [$value]);
            }
        }

        return $this->builder;
    }

    protected function name(string $value): void
    {
        // dd($value);
        $this->builder->where('name', '=',  $value);
    }

    protected function weight(array $value): void
    {
        $this->builder->whereBetween('weight', [
            $value['min'] ?? 0,
            $value['max'] ?? PHP_INT_MAX
        ]);
    }

    protected function material(string $value): void
    {
        $this->builder->where('material', 'like', '%' . $value . '%');
    }

    protected function tag(string $value): void
    {
        // dd($value);
        $this->builder->where('label', 'like', '%' . $value . '%');
    }

    protected function category(int $value): void
    {
        $this->builder->where('figure_category_id', $value);
    }

    protected function size(string $value): void
    {
        $this->builder->where('size', $value);
    }

    protected function sale(int $value): void
    {
        if ($value == 1) {
            $this->builder->where('discount', '>', 0);
        } else {
            $this->builder->where('discount', '=', 0);
        }
    }

    protected function price(int $value): void
    {
        $this->builder->where('price', '<=', $value);
    }

    protected function description(string $value): void
    {
        $this->builder->where('description', '>', $value);
    }
}
