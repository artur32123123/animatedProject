<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class FigureCategory extends Model
{
    /** @use HasFactory<\Database\Factories\FigureCategoryFactory> */
    use HasFactory;
  public function scopeFilter(Builder $builder, $filter): Builder
    {
        return $filter->apply($builder);
    }
    protected $fillable = ['name', 'description'];
    public function figures()
    {
        return $this->hasMany(Figure::class);
    }
}
