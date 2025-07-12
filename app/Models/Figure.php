<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    /** @use HasFactory<\Database\Factories\FigureFactory> */
    use HasFactory;

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value),
        );
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value . '₽',
            set: fn($value) => $value,
        );
    }

    public function getHumanLabelAttribute()
    {
        return match ($this->label) {
            'top' => 'ТОП ПРОДАЖ',
            'hit' => 'ХИТ',
            'new' => 'НОВИНКА',
            'exclusive' => 'ЭКСКЛЮЗИВ',
            'sale' => 'РАСПРОДАЖА',
            default => null,
        };
    }


    public function figureCategory()
    {
        return $this->belongsTo(FigureCategory::class);
    }

    protected $fillable = ['name', 'label', 'weight', 'material', 'size', 'discount', 'price'];
    public function images()
    {
        return $this->hasMany(FiguresImage::class);
    }
}
