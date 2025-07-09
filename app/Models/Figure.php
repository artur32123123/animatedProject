<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    /** @use HasFactory<\Database\Factories\FigureFactory> */
    use HasFactory;
    protected $fillable = ['name', 'description'];
     public function images()
    {
        return $this->hasMany(FiguresImage::class);
    }
}
