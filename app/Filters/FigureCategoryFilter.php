<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class FigureCategoryFilter
{
    protected $builder;

    public function apply(Builder $builder): Builder
    {
        $this->builder = $builder;

        foreach (request()->all() as $name => $value) {
            if (method_exists($this, $name) && !empty($value)) {
                call_user_func_array([$this, $name], [$value]);
            }
        }

        return $this->builder;
    }

    protected function name(string $value): void
    {
        $this->builder->where('name', '=',  $value);
    }

}
