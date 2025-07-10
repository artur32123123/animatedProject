<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    /** @use HasFactory<\Database\Factories\FigureFactory> */
    use HasFactory;
    protected function name() :Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value),
        );
    }

    protected function price () :Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value . '₽',
            set: fn ($value) => $value,
        );
    }

    protected $fillable = ['name', 'description'];
     public function images()
    {
        return $this->hasMany(FiguresImage::class);
    }
}
