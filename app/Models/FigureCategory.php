<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FigureCategory extends Model
{
    /** @use HasFactory<\Database\Factories\FigureCategoryFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description'];
    public function figures()
    {
        return $this->hasMany(Figure::class);
    }
}
